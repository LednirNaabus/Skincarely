<?php
session_start();
include('shared/header.php');
?>

<div class="container pt-5" style="font-family: Poppins;">
  <div class="row">
    <div class="col-6" style="text-align: center;">
      <h1 class="display-4 mb-5">Welcome to Skincarely!</h1>
      <p>To get started, register as a seller by providing the necessary information.</p>
      <button class="btn btn-primary mt-5">Start Registration</button>
    </div>
    <div class="col-6">
      <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 564.46765 449.26526" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path d="M239.34575,431.62993c2.06592,.12937,3.20768-2.43737,1.64468-3.93333l-.1555-.61819c.02047-.04951,.04105-.09897,.06178-.14839,2.08924-4.9818,9.16992-4.94742,11.24139,.04177,1.83859,4.42817,4.17942,8.86389,4.75579,13.54594,.25838,2.0668,.14213,4.17236-.31648,6.20047,4.30807-9.41059,6.57515-19.68661,6.57515-30.02077,0-2.59652-.14213-5.19301-.43275-7.78295-.239-2.11854-.56839-4.2241-.99471-6.31034-2.30575-11.2772-7.29852-22.01825-14.50012-30.98962-3.46197-1.89248-6.34906-4.85065-8.09295-8.39652-.62649-1.27891-1.11739-2.65462-1.34991-4.05618,.39398,.05168,1.48556-5.94866,1.18841-6.3168,.54906-.83317,1.53178-1.24733,2.13144-2.06034,2.98232-4.04341,7.0912-3.33741,9.23621,2.15727,4.58224,2.31266,4.62659,6.14806,1.81495,9.83683-1.78878,2.34682-2.03456,5.52233-3.60408,8.03478,.16151,.20671,.32944,.40695,.4909,.61366,2.96106,3.79788,5.52208,7.88002,7.68104,12.16859-.61017-4.76621,.29067-10.50822,1.82641-14.20959,1.74819-4.21732,5.02491-7.76915,7.91045-11.41501,3.46601-4.37924,10.57337-2.46806,11.18401,3.08332,.00591,.05375,.01166,.10745,.01731,.1612-.4286,.24178-.84849,.49867-1.25864,.76992-2.33949,1.54723-1.53096,5.17386,1.24107,5.60174l.06277,.00967c-.15503,1.54366-.41984,3.07444-.80734,4.57937,3.70179,14.31579-4.29011,19.5299-15.70147,19.76412-.25191,.12916-.49738,.25832-.74929,.38109,1.15617,3.25525,2.07982,6.59447,2.76441,9.97891,.61359,2.99043,1.03991,6.01317,1.27885,9.04888,.29715,3.83006,.27129,7.67959-.05168,11.50323l.01939-.13562c.82024-4.21115,3.10671-8.14462,6.4266-10.87028,4.94561-4.06264,11.93282-5.55869,17.26826-8.82425,2.56833-1.57196,5.85945,.45945,5.41121,3.43708l-.02182,.14261c-.79443,.32289-1.56947,.69755-2.31871,1.11733-.4286,.24184-.84848,.49867-1.25864,.76992-2.33949,1.54729-1.53096,5.17392,1.24107,5.6018l.06282,.00965c.0452,.00646,.08397,.01295,.12911,.01944-1.36282,3.23581-3.26168,6.23922-5.63854,8.82922-2.31463,12.49713-12.25603,13.68282-22.89022,10.04354h-.00648c-1.16259,5.06378-2.86128,10.01127-5.0444,14.72621h-18.02019c-.06463-.20022-.12274-.40692-.18089-.60717,1.6664,.10341,3.34571,.00649,4.98629-.29702-1.33701-1.64059-2.67396-3.29409-4.01097-4.93462-.03229-.0323-.05816-.0646-.08397-.09689-.67817-.8396-1.36282-1.67283-2.04099-2.51246l-.00036-.00102c-.04245-2.57755,.26652-5.14662,.87876-7.63984l.00057-.00035Z" fill="#f2f2f2" />
        <path d="M0,448.07526c0,.66003,.53003,1.19,1.19006,1.19H404.48004c.65997,0,1.19-.52997,1.19-1.19,0-.65997-.53003-1.19-1.19-1.19H1.19006c-.66003,0-1.19006,.53003-1.19006,1.19Z" fill="#ccc" />
        <path d="M544.74304,449h-206.55127c-10.87598,0-19.72412-8.84863-19.72412-19.72461V19.72461c0-10.87598,8.84814-19.72461,19.72412-19.72461h206.55127c10.87598,0,19.72461,8.84863,19.72461,19.72461V429.27539c0,10.87598-8.84863,19.72461-19.72461,19.72461ZM338.19177,2c-9.78876,0-17.72412,7.93536-17.72412,17.72412V429.27539c0,9.78903,7.93558,17.72461,17.72461,17.72461h206.55078c9.78903,0,17.72461-7.93558,17.72461-17.72461V150.70484c0-82.12742-66.57743-148.70484-148.70484-148.70484h-75.57104Z" fill="#3f3d56" />
        <g>
          <circle cx="377.13408" cy="178.11811" r="24" fill="#e6e6e6" />
          <circle cx="505.80075" cy="178.11811" r="24" fill="#e6e6e6" />
          <circle cx="441.46741" cy="178.11811" r="24" fill="#e6e6e6" />
        </g>
        <circle cx="377.13408" cy="247.11811" r="24" fill="#e6e6e6" />
        <circle cx="505.80075" cy="247.11811" r="24" fill="#e6e6e6" />
        <circle cx="441.46741" cy="247.11811" r="24" fill="#e6e6e6" />
        <circle cx="377.13408" cy="316.11811" r="24" fill="#e6e6e6" />
        <circle cx="505.30993" cy="385" r="24" fill="#e6e6e6" />
        <ellipse cx="409.80993" cy="385" rx="56.5" ry="24" fill="#e6e6e6" />
        <circle cx="505.80075" cy="316.11811" r="24" fill="#e6e6e6" />
        <circle cx="441.46741" cy="316.11811" r="24" fill="#ac7672" />
        <path d="M446.18385,28H216.6503c-6.80601,0-12.34037,5.53432-12.34037,12.34033V124.65963c0,6.80601,5.53436,12.34037,12.34037,12.34037h229.53355c6.80601,0,12.34037-5.53436,12.34037-12.34037V40.34033c0-6.80601-5.53436-12.34033-12.34037-12.34033Z" fill="#fff" />
        <path d="M446.18385,28H216.6503c-6.80601,0-12.34037,5.53432-12.34037,12.34033V124.65963c0,6.80601,5.53436,12.34037,12.34037,12.34037h229.53355c6.80601,0,12.34037-5.53436,12.34037-12.34037V40.34033c0-6.80601-5.53436-12.34033-12.34037-12.34033Zm11.04275,96.65963c0,6.09233-4.95042,11.04275-11.04275,11.04275H216.6503c-6.09233,0-11.04275-4.95042-11.04275-11.04275V40.34033c0-6.09229,4.95042-11.04271,11.04275-11.04271h229.53355c6.09233,0,11.04275,4.95042,11.04275,11.04271V124.65963Z" fill="#3f3d56" />
        <rect x="225.91708" y="79" width="211" height="7" rx="3.5" ry="3.5" fill="#ac7672" />
        <g>
          <g>
            <polygon points="67.95213 180.42129 65.90768 192.59602 84.03834 236.69982 93.76596 231.69877 84.29796 190.42664 82.93717 174.67575 67.95213 180.42129" fill="#a0616a" />
            <path d="M87.96609,111.92855s-9.49261-4.59838-16.85857,10.93887c-7.36596,15.53725-6.45381,49.61433-6.45381,49.61433,0,0-2.68212,2.55393-.9795,4.34201s3.28993,4.62577,1.55307,7.89681c-.9154,1.72399-3.03398,5.09676,.43536,6.05489,3.46934,.95813,19.69791-3.56816,19.69791-3.56816,0,0,6.06837-2.71848,2.62039-4.54929-3.44797-1.83081,1.4081-12.90537,1.4081-12.90537l4.01246-31.99147-5.43541-25.83262Z" fill="#ac7672" />
            <ellipse cx="91.85157" cy="241.9309" rx="7.21689" ry="12.15477" transform="translate(-66.97226 37.62166) rotate(-17.07063)" fill="#a0616a" />
          </g>
          <g>
            <polygon points="185.27776 442.5699 194.36401 440.13085 189.2821 403.92273 175.87152 407.52214 185.27776 442.5699" fill="#a0616a" />
            <path d="M216.35388,434.01035h0c.41075,.40056,.97271,1.8984,1.1214,2.45253h0c.45702,1.70323-.55323,3.45446-2.25645,3.91148l-28.13979,7.55067c-1.16195,.31178-2.35664-.37741-2.66842-1.53936l-.31436-1.17155s-2.33687-3.14757-.63539-8.25657c0,0,4.4739,2.44248,8.36829-4.30831l.80662-3.26456,13.59126,5.26066,6.50559-.91464c1.42327-.2001,2.59225-.72379,3.62124,.27966Z" fill="#2f2e41" />
          </g>
          <g>
            <polygon points="96.2113 442.361 105.61922 442.36008 110.09461 406.072 96.20939 406.07296 96.2113 442.361" fill="#a0616a" />
            <path d="M128.44398,442.14758h0c.29291,.49332,.44749,2.08563,.44749,2.65936h0c0,1.76348-1.42958,3.19306-3.19306,3.19306h-29.13521c-1.20305,0-2.17832-.97527-2.17832-2.17832v-1.21299s-1.44131-3.64566,1.52609-8.13914c0,0,3.68805,3.51848,9.19893-1.99239l1.62511-2.94398,11.76356,8.60323,6.52037,.80259c1.4265,.17559,2.69126-.02725,3.42504,1.20859Z" fill="#2f2e41" />
          </g>
          <path d="M158.82276,226.20501l24.73867,106.63221,11.94281,86.15882-18.76727,2.55917-52.03652-146.72592-11.94281,146.72592-21.32644,1.70612s-17.06115-174.02376-9.38363-195.3502l76.77519-1.70612Z" fill="#2f2e41" />
          <g>
            <polygon points="188.26927 100.11464 196.80486 91.19571 206.607 44.52897 195.75069 43.19573 180.37664 82.6504 172.64656 96.44127 188.26927 100.11464" fill="#a0616a" />
            <path d="M133.21005,145.50513s7.98834,14.72948,22.81524,6.02164c14.8269-8.70785,30.50798-42.99178,30.50798-42.99178,0,0,3.13116-8.71523,6.40656-10.44384,1.72629-.91106,6.16822-1.89357,3.8378-4.63646-2.33042-2.74289-19.0897-8.73935-19.0897-8.73935,0,0-6.54685-1.16359-4.72473,2.28898,1.82212,3.45257-4.16226,1.31382-3.55812,4.96777,.60414,3.65395-4.86201,4.91316-4.86201,4.91316l-31.33303,48.61987Z" fill="#ac7672" />
            <ellipse cx="203.08656" cy="35.81018" rx="12.15477" ry="7.21689" transform="translate(109.01967 219.32569) rotate(-72.86125)" fill="#a0616a" />
          </g>
          <path d="M134.2706,94.47349h-23.35635l-.94516,7.36409s-29.45637,8.1005-28.71996,12.51896,5.15486,78.05938,5.15486,78.05938l-3.68205,36.82046s66.27683,27.98355,76.58656-5.15486l-5.15486-38.29328s12.51896-65.54042,9.57332-68.48606c-2.94564-2.94564-27.24714-14.72818-27.24714-14.72818l-2.20923-8.1005Z" fill="#ac7672" />
          <circle cx="120.70371" cy="73.60124" r="20.964" fill="#a0616a" />
          <path d="M136.22941,64.9778c2.6786-.22647,5.35708-.45294,8.03555-.67929-.92068-.42235-1.87955-.87429-2.49305-1.68044-.61337-.80602-.74023-2.07965,.00075-2.77026,.86596-.80701,2.30003-.37944,3.24646,.33144-.52109-2.72088-2.14507-5.21393-4.42346-6.79002-2.78307-1.92531-6.28-2.42017-9.63515-2.86217-3.87127-.51003-7.74255-1.01993-11.61382-1.52995-1.45906-.19215-3.1012-.33716-4.2486,.58465-1.27264,1.02229-1.41541,2.95519-2.53819,4.14003-1.60308,1.69175-4.3507,1.19267-6.63208,1.66862-3.23128,.67431-5.66712,3.50763-6.79214,6.61094s-1.16643,6.47861-1.19516,9.77954c-.03209,3.69927,.11616,7.84963,2.79177,10.40461,1.62994,1.55657,5.91026,7.02931,6.39019,9.23158,.34089,1.56403,14.23372,3.46895,17.24487,3.38226l10.26295-3.38226c1.00861-4.44137-1.6772-12.42891-4.07523-16.30093,.78973,1.04306,4.53576-1.8732,5.09404-3.05643s1.5904-1.10114,2.28535-2.20949c.87728-1.39887-3.3503-4.73338-1.70506-4.87242Z" fill="#2f2e41" />
        </g>
      </svg>
    </div>
  </div>
</div>
<hr class="my-5">
<form action="shop_creation.php" method="post" enctype="multipart/form-data">
  <div class="container my-5" style="font-family: Poppins;">
    <h2 class="mb-4">Shop Information: </h2>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="shopname">Shop Name</label>
          <input type="text" class="form-control" id="shopname" name="shopname">
        </div>
        <div class="form-group">
          <label for="shopmotto">Shop Motto</label>
          <input type="text" class="form-control" id="shopmotto" name="shopmotto">
        </div>
        <div class="form-group">
          <label for="shopdescription">Shop Description</label>
          <textarea class="form-control" id="shopdescription" rows="3" name="shopdescription"></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="landline">Landline No.</label>
            <input type="text" class="form-control" id="landline" name="landline">
          </div>
          <div class="form-group col-md-6">
<<<<<<< HEAD
            <label for="mobile">Mobile No.</label>
            <input type="text" class="form-control" id="mobile" name="mobile">
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class=" h-100 d-flex justify-content-center align-items-center">
          <div class="form-group">
            <label for="shoplogo">Shop Logo</label>
            <input type="file" class="form-control-file" id="shoplogo" name="shoplogo">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container my-5" style="font-family: Poppins;">
    <h2 class="mb-4">Shop Location: </h2>
    <div class="row">
      <h4 class="mb-4">Main Branch: </h4>
      <div class="form-group col-6">
        <label for="region">Region</label>
        <select class="form-select" style="line-height: 61.5px;" name="region" id="region" required></select>
      </div>
      <div class="form-group col-6">
        <label for="region">City</label>
        <select class="form-select" style="line-height: 61.5px;" name="city" id="city" required></select>
      </div>
      <div class="form-group col-6">
        <label for="region">Province</label>
        <select class="form-select" style="line-height: 61.5px;" name="province" id="province" required></select>
      </div>
      <div class="form-group col-6">
        <label for="region">Barangay</label>
        <select class="form-select" style="line-height: 61.5px;" name="barangay" id="barangay" required></select>
      </div>
    </div>
    <button class="btn btn-primary p-3 my-4">
      Add another Branch &nbsp; <i class="fa fa-plus"></i>
    </button>
  </div>
  <div class="container my-5" style="font-family: Poppins;">
    <div class="row">
      <div class="form-group col-md-6">
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">Checkbox</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">Checkbox</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">Checkbox</label>
        </div>
      </div>
      <div class="form-group col-md-6">
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">Checkbox</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">Checkbox</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">Checkbox</label>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5" style="font-family: Poppins;">
    <div class="row">
      <div class="col-6">
        <label for="socials">Social Media Link</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
=======
          <label for="otherbranch">Other Branches</label>
          <select class="form-select"  name="otherbranch[]" id="otherbranch" multiple>
                <option value="" disabled> ---------------------------- Province ----------------------------</option>
                <option value="Abra">Abra</option>
                <option value="Agusan del Norte">Agusan del Norte</option>
                <option value="Agusan del Sur">Agusan del Sur</option>
                <option value="Aklan">Aklan</option>
                <option value="Albay">Albay</option>
                <option value="Antique">Antique</option>
                <option value="Apayao">Apayao</option>
                <option value="Aurora">Aurora</option>
                <option value="Basilan">Basilan</option>
                <option value="Bataan">Bataan</option>
                <option value="Batanes">Batanes</option>
                <option value="Batangas">Batangas</option>
                <option value="Benguet">Benguet</option>
                <option value="Biliran">Biliran</option>
                <option value="Bohol">Bohol</option>
                <option value="Bukidnon">Bukidnon</option>
                <option value="Bulacan">Bulacan</option>
                <option value="Cagayan">Cagayan</option>
                <option value="Camarines Norte">Camarines Norte</option>
                <option value="Camarines Sur">Camarines Sur</option>
                <option value="Camiguin">Camiguin</option>
                <option value="Capiz">Capiz</option>
                <option value="Catanduanes">Catanduanes</option>
                <option value="Cavite">Cavite</option>
                <option value="Cebu">Cebu</option>
                <option value="Cotabato">Cotabato</option>
                <option value="Davao de Oro">Davao de Oro</option>
                <option value="Davao del Norte">Davao del Norte</option>
                <option value="Davao del Sur">Davao del Sur</option>
                <option value="Davao Occidental">Davao Occidental</option>
                <option value="Davao Oriental">Davao Oriental</option>
                <option value="Dinagat Islands">Dinagat Islands</option>
                <option value="Eastern Samar">Eastern Samar</option>
                <option value="Guimaras">Guimaras</option>
                <option value="Ifugao">Ifugao</option>
                <option value="Ilocos Norte">Ilocos Norte</option>
                <option value="Ilocos Sur">Ilocos Sur</option>
                <option value="Iloilo">Iloilo</option>
                <option value="Isabela">Isabela</option>
                <option value="Kalinga">Kalinga</option>
                <option value="La Union">La Union</option>
                <option value="Laguna">Laguna</option>
                <option value="Lanao del Norte">Lanao del Norte</option>
                <option value="Lanao del Sur">Lanao del Sur</option>
                <option value="Leyte">Leyte</option>
                <option value="Maguindanao">Maguindanao</option>
                <option value="Marinduque">Marinduque</option>
                <option value="Masbate">Masbate</option>
                <option value="Misamis Occidental">Misamis Occidental</option>
                <option value="Misamis Oriental">Misamis Oriental</option>
                <option value="Mountain Province">Mountain Province</option>
                <option value="Negros Occidental">Negros Occidental</option>
                <option value="Negros Oriental">Negros Oriental</option>
                <option value="Northern Samar">Northern Samar</option>
                <option value="Nueva Ecija">Nueva Ecija</option>
                <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                <option value="Occidental Mindoro">Occidental Mindoro</option>
                <option value="Oriental Mindoro">Oriental Mindoro</option>
                <option value="Palawan">Palawan</option>
                <option value="Pampanga">Pampanga</option>
                <option value="Pangasinan">Pangasinan</option>
                <option value="Quezon">Quezon</option>
                <option value="Quirino">Quirino</option>
                <option value="Rizal">Rizal</option>
                <option value="Romblon">Romblon</option>
                <option value="Samar">Samar</option>
                <option value="Sarangani">Sarangani</option>
                <option value="Siquijor">Siquijor</option>
                <option value="Sorsogon">Sorsogon</option>
                <option value="South Cotabato">South Cotabato</option>
                <option value="Southern Leyte">Southern Leyte</option>
                <option value="Sultan Kudarat">Sultan Kudarat</option>
                <option value="Sulu">Sulu</option>
                <option value="Surigao del Norte">Surigao del Norte</option>
                <option value="Surigao del Sur">Surigao del Sur</option>
                <option value="Tarlac">Tarlac</option>
                <option value="Tawi-Tawi">Tawi-Tawi</option>
                <option value="Zambales">Zambales</option>
                <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                <option value="" disabled>---------------------------- Metro Manila ----------------------------</option>
                <option value="Caloocan">Caloocan</option>
                <option value="Las Pinas">Las Pinas</option>
                <option value="Makati">Makati</option>
                <option value="Malabon">Malabon</option>
                <option value="Mandaluyong">Mandaluyong</option>
                <option value="Manila">Manila</option>
                <option value="Marikina">Marikina</option>
                <option value="Muntinlupa">Muntinlupa</option>
                <option value="Navotas">Navotas</option>
                <option value="Paranaque">Paranaque</option>
                <option value="Pasay">Pasay</option>
                <option value="Pasig">Pasig</option>
                <option value="Pateros">Pateros</option>
                <option value="Quezon City">Quezon City</option>
                <option value="San Juan">San Juan</option>
                <option value="Taguig">Taguig</option>
                <option value="Valenzuela">Valenzuela</option>
          </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
          <label for="pickup">Pick Up Areas</label>
          <select class="form-select" name="pickup[]" id="pickup" multiple required>
                <option value="" disabled> ---------------------------- Province ----------------------------</option>
                <option value="Abra">Abra</option>
                <option value="Agusan del Norte">Agusan del Norte</option>
                <option value="Agusan del Sur">Agusan del Sur</option>
                <option value="Aklan">Aklan</option>
                <option value="Albay">Albay</option>
                <option value="Antique">Antique</option>
                <option value="Apayao">Apayao</option>
                <option value="Aurora">Aurora</option>
                <option value="Basilan">Basilan</option>
                <option value="Bataan">Bataan</option>
                <option value="Batanes">Batanes</option>
                <option value="Batangas">Batangas</option>
                <option value="Benguet">Benguet</option>
                <option value="Biliran">Biliran</option>
                <option value="Bohol">Bohol</option>
                <option value="Bukidnon">Bukidnon</option>
                <option value="Bulacan">Bulacan</option>
                <option value="Cagayan">Cagayan</option>
                <option value="Camarines Norte">Camarines Norte</option>
                <option value="Camarines Sur">Camarines Sur</option>
                <option value="Camiguin">Camiguin</option>
                <option value="Capiz">Capiz</option>
                <option value="Catanduanes">Catanduanes</option>
                <option value="Cavite">Cavite</option>
                <option value="Cebu">Cebu</option>
                <option value="Cotabato">Cotabato</option>
                <option value="Davao de Oro">Davao de Oro</option>
                <option value="Davao del Norte">Davao del Norte</option>
                <option value="Davao del Sur">Davao del Sur</option>
                <option value="Davao Occidental">Davao Occidental</option>
                <option value="Davao Oriental">Davao Oriental</option>
                <option value="Dinagat Islands">Dinagat Islands</option>
                <option value="Eastern Samar">Eastern Samar</option>
                <option value="Guimaras">Guimaras</option>
                <option value="Ifugao">Ifugao</option>
                <option value="Ilocos Norte">Ilocos Norte</option>
                <option value="Ilocos Sur">Ilocos Sur</option>
                <option value="Iloilo">Iloilo</option>
                <option value="Isabela">Isabela</option>
                <option value="Kalinga">Kalinga</option>
                <option value="La Union">La Union</option>
                <option value="Laguna">Laguna</option>
                <option value="Lanao del Norte">Lanao del Norte</option>
                <option value="Lanao del Sur">Lanao del Sur</option>
                <option value="Leyte">Leyte</option>
                <option value="Maguindanao">Maguindanao</option>
                <option value="Marinduque">Marinduque</option>
                <option value="Masbate">Masbate</option>
                <option value="Misamis Occidental">Misamis Occidental</option>
                <option value="Misamis Oriental">Misamis Oriental</option>
                <option value="Mountain Province">Mountain Province</option>
                <option value="Negros Occidental">Negros Occidental</option>
                <option value="Negros Oriental">Negros Oriental</option>
                <option value="Northern Samar">Northern Samar</option>
                <option value="Nueva Ecija">Nueva Ecija</option>
                <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                <option value="Occidental Mindoro">Occidental Mindoro</option>
                <option value="Oriental Mindoro">Oriental Mindoro</option>
                <option value="Palawan">Palawan</option>
                <option value="Pampanga">Pampanga</option>
                <option value="Pangasinan">Pangasinan</option>
                <option value="Quezon">Quezon</option>
                <option value="Quirino">Quirino</option>
                <option value="Rizal">Rizal</option>
                <option value="Romblon">Romblon</option>
                <option value="Samar">Samar</option>
                <option value="Sarangani">Sarangani</option>
                <option value="Siquijor">Siquijor</option>
                <option value="Sorsogon">Sorsogon</option>
                <option value="South Cotabato">South Cotabato</option>
                <option value="Southern Leyte">Southern Leyte</option>
                <option value="Sultan Kudarat">Sultan Kudarat</option>
                <option value="Sulu">Sulu</option>
                <option value="Surigao del Norte">Surigao del Norte</option>
                <option value="Surigao del Sur">Surigao del Sur</option>
                <option value="Tarlac">Tarlac</option>
                <option value="Tawi-Tawi">Tawi-Tawi</option>
                <option value="Zambales">Zambales</option>
                <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                <option value="" disabled>---------------------------- Metro Manila ----------------------------</option>
                <option value="Caloocan">Caloocan</option>
                <option value="Las Pinas">Las Pinas</option>
                <option value="Makati">Makati</option>
                <option value="Malabon">Malabon</option>
                <option value="Mandaluyong">Mandaluyong</option>
                <option value="Manila">Manila</option>
                <option value="Marikina">Marikina</option>
                <option value="Muntinlupa">Muntinlupa</option>
                <option value="Navotas">Navotas</option>
                <option value="Paranaque">Paranaque</option>
                <option value="Pasay">Pasay</option>
                <option value="Pasig">Pasig</option>
                <option value="Pateros">Pateros</option>
                <option value="Quezon City">Quezon City</option>
                <option value="San Juan">San Juan</option>
                <option value="Taguig">Taguig</option>
                <option value="Valenzuela">Valenzuela</option>
          </select>
          </div>
          <div class="form-group col-md-6">
          <label for="delivery">Delivery</label>
          <select class="form-select" style="line-height: 61.5px;" name="delivery[]" id="delivery" multiple required>
                <option value="" disabled selected>Mode of Delivery</option>
                <option>Standard Delivery</option>
                <option>J&T Express</option>
                <option>Grab Delivery</option>
          </select>
>>>>>>> 6d4edb63184f03f42c9caa59a81e5198d1288ee1
          </div>
          <input type="email" class="form-control" placeholder="Email" id="socials" name="socials">
        </div>
<<<<<<< HEAD
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Email" id="socials" name="socials">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
=======

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="landline">Landline No.</label>
            <input type="text" class="form-control" id="landline" name="landline" style="font-size: 12px;">
          </div>
          <div class="form-group col-md-6">
            <label for="mobile">Mobile No.</label>
            <input type="text" class="form-control" id="mobile" name="mobile" style="font-size: 12px;">
>>>>>>> 6d4edb63184f03f42c9caa59a81e5198d1288ee1
          </div>
          <input type="email" class="form-control" placeholder="Email" id="socials" name="socials">
        </div>
<<<<<<< HEAD
      </div>
      <div class="col-6">
        <label for="socials">&nbsp;</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Email" id="socials" name="socials">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Email" id="socials" name="socials">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Email" id="socials" name="socials">
=======

        <div class="form-row">
        <label for="payment">Payment</label>
          <select class="form-select" name="payment[]" id="payment" multiple required>
                <option value="" disabled selected>Payment Options</option>
                <option>E-wallet</option>
                <option>Credit Card</option>
                <option>Cash on Delivery</option>
          </select>
>>>>>>> 6d4edb63184f03f42c9caa59a81e5198d1288ee1
        </div>
      </div>
    </div> 
    <button type="submit" class="btn btn-primary">Create</button>
  </div>


<<<<<<< HEAD
</form>

=======
        <div class="form-group">
          <label for="socials">Social Media Links</label>
          <br>
          <div class="input-group-prepend" style="width: 155px; display:inline-block;">
          <div class="input-group-text" style="font-size: 12px;">https://facebook.com/</div>
          </div>
          <input type="text" class="form-control" id="socials1" name="socials1" style="display: inline-block; width: 800px; height: 27px; font-size: 12px;">
          <br>
          <div class="input-group-prepend" style="width: 155px; display:inline-block;">
          <div class="input-group-text" style="font-size: 12px;">https://twitter.com/</div>
          </div>
          <input type="text" class="form-control" id="socials1" name="socials2" style="display: inline-block; width: 800px; height: 27px; font-size: 12px;">
          <br>
          <div class="input-group-prepend" style="width: 155px; display:inline-block;">
          <div class="input-group-text" style="font-size: 12px;">https://instagram.com/</div>
          </div>
          <input type="text" class="form-control" id="socials1" name="socials3" style="display: inline-block; width: 800px; height: 27px; font-size: 12px;">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Create</button>
>>>>>>> 6d4edb63184f03f42c9caa59a81e5198d1288ee1


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>

<script type="text/javascript">
  var my_handlers = {

    fill_provinces: function() {

      var region_code = $(this).val();
      $('#province').ph_locations('fetch_list', [{
        "region_code": region_code
      }]);

    },

    fill_cities: function() {

      var province_code = $(this).val();
      $('#city').ph_locations('fetch_list', [{
        "province_code": province_code
      }]);
    },


    fill_barangays: function() {

      var city_code = $(this).val();
      $('#barangay').ph_locations('fetch_list', [{
        "city_code": city_code
      }]);
    }
  };

  $(function() {
    $('#region').on('change', my_handlers.fill_provinces);
    $('#province').on('change', my_handlers.fill_cities);
    $('#city').on('change', my_handlers.fill_barangays);

    $('#region').ph_locations({
      'location_type': 'regions'
    });
    $('#province').ph_locations({
      'location_type': 'provinces'
    });
    $('#city').ph_locations({
      'location_type': 'cities'
    });
    $('#barangay').ph_locations({
      'location_type': 'barangays'
    });

    $('#region').ph_locations('fetch_list');
  });
</script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';

    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
<?php
include('shared/footer.php');
?>