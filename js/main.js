$(document).ready(function () {
  var current_fs, next_fs, previous_fs // FieldSets
  var opacity
  var input = $('.validate-input .input100')

  var now = new Date()
  var formattedDate =
    now.getFullYear() +
    '-' +
    (now.getMonth() + 1).toString().padStart(2, '0') +
    '-' +
    now.getDate().toString().padStart(2, '0')
  var formattedTime =
    now.getHours().toString().padStart(2, '0') +
    ':' +
    now.getMinutes().toString().padStart(2, '0')
  $('.datetime').val(formattedDate + 'T' + formattedTime)

  // $('.userName').val('<?php echo $_SESSION["user_name"]; ?>');

  $('.next').click(function () {
    current_fs = $(this).parent()
    next_fs = $(this).parent().next()

    // Add Class Active To Round Circles Of Progress Bar
    $('#progressbar li').eq($('fieldset').index(next_fs)).addClass('active')

    // Show Next FieldSet
    next_fs.show()

    // Hide The Current Fieldset With Style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // For Making FieldSet Appear With Animation
          opacity = 1 - now

          current_fs.css({
            display: 'none',
            position: 'relative'
          })
          next_fs.css({ opacity: opacity })
        },
        duration: 600
      }
    )
  })

  $('.previous').click(function () {
    current_fs = $(this).parent()
    previous_fs = $(this).parent().prev()

    // Remove Class Active From Round Circles Of Progress Bar
    $('#progressbar li')
      .eq($('fieldset').index(current_fs))
      .removeClass('active')

    // Show Previous FieldSet
    previous_fs.show()

    // Hide The Current FieldSet With Style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // For Making FieldSet Appear With Animation
          opacity = 1 - now

          current_fs.css({
            display: 'none',
            position: 'relative'
          })
          previous_fs.css({ opacity: opacity })
        },
        duration: 600
      }
    )
  })

  $('.radio-group .radio').click(function () {
    $(this).parent().find('.radio').removeClass('selected')
    $(this).addClass('selected')
  })

  $('.dropdown-menu a').click(function () {
    $('#merging-Size-Dropdown').val($(this).data('value'))
  })

  // Show block according to selected society
  $('#societySelectConfirm').click(function () {
    var selectedSociety = $('input[name=society]:checked').val()

    // By default hide all blocks of all societies
    $('.alNoorOrchardBlocks').hide()
    $('.alBariResidenciaBlocks').hide()
    $('.alJalilGardenSheikhupuraBlocks').hide()
    $('.amazonMallBlocks').hide()
    $('.blueWorldCityIslamabadBlocks').hide()
    $('.bahriaEnclaveBlocks').hide()
    $('.bahriaTownBlocks').hide()
    $('.citiHousingKharianBlocks').hide()
    $('.citiHousingMultanBlocks').hide()
    $('.capitalSmartCityBlocks').hide()
    $('.dHaMultanBlocks').hide()
    $('.dHAIslamabadBlocks').hide()
    $('.dreamHousingLahoreBlocks').hide()
    $('.eighteenIslamabad18Blocks').hide()
    $('.faisalTownPhase1Blocks').hide()
    $('.golfFlorasBlocks').hide()
    $('.hateemCityBlocks').hide()
    $('.kingdomValleyIslamabadBlocks').hide()
    $('.kingsTownLahoreBlocks').hide()
    $('.mallofArabiaBlocks').hide()
    $('.novaCityIslamabadBlocks').hide()
    $('.novaOneLahoreBlocks').hide()
    $('.novaOnePeshawarBlocks').hide()
    $('.newMetroCityGKBlocks').hide()
    $('.newCityParadiseBlocks').hide()
    $('.newMetroCityMandiBahauddinBlocks').hide()
    $('.parkViewCityLahoreBlocks').hide()
    $('.parkViewCityIslamabadBlocks').hide()
    $('.royalOrchardMultanBlocks').hide()
    $('.rudnEnclaveBlocks').hide()
    $('.riverVistaIslamabadBlocks').hide()
    $('.silverCityIslamabadBlocks').hide()
    $('.tajResidenciaIslamabadBlocks').hide()
    $('.victoriaCityBlocks').hide()
    $('.7WondersCityIslamabadBlocks').hide()
    $('.lahoreMotorwayCityBlocks').hide()
    $('.soulCityBlocks').hide()
    $('.victoriaCityBlocks').hide()
    $('.faisalHillsBlocks').hide()

    if (selectedSociety == 'Al Noor Orchard') {
      console.log('This is the one')
      $('.alNoorOrchardBlocks').show()
    } else if (selectedSociety == 'Al Bari Residencia') {
      $('.alBariResidenciaBlocks').show()
    } else if (selectedSociety == 'Al Jalil Garden Sheikhupura') {
      $('.alJalilGardenSheikhupuraBlocks').show()
    } else if (selectedSociety == 'Amazon Mall') {
      $('.amazonMallBlocks').show()
    } else if (selectedSociety == 'Blue World City Islamabad') {
      $('.blueWorldCityIslamabadBlocks').show()
    } else if (selectedSociety == 'Bahria Enclave') {
      $('.bahriaEnclaveBlocks').show()
    } else if (selectedSociety == 'Bahria Town') {
      $('.bahriaTownBlocks').show()
    } else if (selectedSociety == 'Citi Housing Kharian') {
      $('.citiHousingKharianBlocks').show()
    } else if (selectedSociety == 'Citi Housing Multan') {
      $('.citiHousingMultanBlocks').show()
    } else if (selectedSociety == 'Capital Smart City') {
      $('.capitalSmartCityBlocks').show()
    } else if (selectedSociety == 'DHA Multan') {
      $('.dHaMultanBlocks').show()
    } else if (selectedSociety == 'DHA Islamabad') {
      $('.dHAIslamabadBlocks').show()
    } else if (selectedSociety == 'Dream Housing Lahore') {
      $('.dreamHousingLahoreBlocks').show()
    } else if (selectedSociety == 'Eighteen Islamabad 18') {
      $('.eighteenIslamabad18Blocks').show()
    } else if (selectedSociety == 'Faisal Town Phase 1') {
      $('.faisalTownPhase1Blocks').show()
    } else if (selectedSociety == 'Golf Floras') {
      $('.golfFlorasBlocks').show()
    } else if (selectedSociety == 'Hateem City') {
      $('.hateemCityBlocks').show()
    } else if (selectedSociety == 'Kingdom Valley Islamabad') {
      $('.kingdomValleyIslamabadBlocks').show()
    } else if (selectedSociety == 'Kings Town Lahore') {
      $('.kingsTownLahoreBlocks').show()
    } else if (selectedSociety == 'Lahore Smart City') {
      $('.lahoreSmartCityBlocks').show()
    } else if (selectedSociety == 'Mall of Arabia') {
      $('.mallofArabiaBlocks').show()
    } else if (selectedSociety == 'Nova City Islamabad') {
      $('.novaCityIslamabadBlocks').show()
    } else if (selectedSociety == 'Nova One Lahore') {
      $('.novaOneLahoreBlocks').show()
    } else if (selectedSociety == 'Nova City Peshawar') {
      $('.novaOnePeshawarBlocks').show()
    } else if (selectedSociety == 'New Metro City GK') {
      $('.newMetroCityGKBlocks').show()
    } else if (selectedSociety == 'New City Paradise') {
      $('.newCityParadiseBlocks').show()
    } else if (selectedSociety == 'New Metro City Mandi Bahauddin') {
      $('.newMetroCityMandiBahauddinBlocks').show()
    } else if (selectedSociety == 'Park View City Lahore') {
      $('.parkViewCityLahoreBlocks').show()
    } else if (selectedSociety == 'Park View City Islamabad') {
      $('.parkViewCityIslamabadBlocks').show()
    } else if (selectedSociety == 'Royal Orchard Multan') {
      $('.royalOrchardMultanBlocks').show()
    } else if (selectedSociety == 'Rudn Enclave') {
      $('.rudnEnclaveBlocks').show()
    } else if (selectedSociety == 'River Vista Islamabad') {
      $('.riverVistaIslamabadBlocks').show()
    } else if (selectedSociety == 'Silver City Islamabad') {
      $('.silverCityIslamabadBlocks').show()
    } else if (selectedSociety == 'Signature (J7)') {
    } else if (selectedSociety == 'Taj Residencia Islamabad') {
      $('.tajResidenciaIslamabadBlocks').show()
    } else if (selectedSociety == 'Tab City') {
    } else if (selectedSociety == 'Victoria City') {
      $('.victoriaCityBlocks').show()
    } else if (selectedSociety == 'Wirasat / Others') {
    } else if (selectedSociety == '7 Wonders City Islamabad') {
      $('.7WondersCityIslamabadBlocks').show()
    } else if (selectedSociety == 'Lahore Motorway City') {
      $('.lahoreMotorwayCityBlocks').show()
    } else if (selectedSociety == 'Soul City') {
      $('.soulCityBlocks').show()
    } else if (selectedSociety == 'Faisal Town Phase 2') {
      $('.faisalTownPhase2Blocks').show()
    } else if (selectedSociety == 'MPCHS Chakri Road') {
      $('.mPCHSChakriRoadBlocks').show()
    } else if (selectedSociety == 'Faisal Hills') {
      $('.faisalHillsBlocks').show()
    }

    $(function () {
      $('.dropdown-menu a').click(function () {
        $('.btn:first-child').text($(this).text())
        $('.btn:first-child').val($(this).text())
      })
    })

    $('.validate-form').on('submit', function () {
      var check = true

      for (var i = 0; i < input.length; i++) {
        if (validate(input[i]) == false) {
          showValidate(input[i])
          check = false
        }
      }

      return check
    })

    $('.validate-form .input100').each(function () {
      $(this).focus(function () {
        hideValidate(this)
      })
    })

    function validate (input) {
      if (
        $(input).attr('type') == 'email' ||
        $(input).attr('name') == 'email'
      ) {
        if (
          $(input)
            .val()
            .trim()
            .match(
              /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
            ) == null
        ) {
          return false
        }
      } else {
        if ($(input).val().trim() == '') {
          return false
        }
      }
    }

    function showValidate (input) {
      var thisAlert = $(input).parent()

      $(thisAlert).addClass('alert-validate')
    }

    function hideValidate (input) {
      var thisAlert = $(input).parent()

      $(thisAlert).removeClass('alert-validate')
    }
  })
})
