<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->

<!DOCTYPE html>
<html lang='en'>
  <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="stylesheets/styles.css">
      <link rel="stylesheet" href="stylesheets/owlcarousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="stylesheets/owlcarousel/assets/owl.theme.default.min.css">
  </head>
  <body>
    <?php include('header.html')?>
    <div class="main-page-area">
    <div class='profile-container1'>
    <h1 class='text-center' id='listcount'> Welcome Back! </h1>
    <!-- Toggle Buttons -->
    <div class="profile-buttons">
      <button class="profile-button" onclick="ViewLists()">My Lists</button>
      <button class="profile-button" onclick="ViewFriends()">My Friends</button>
    </div>
    <div class="profile-container2">
      <div id='profile-title'>
        <h2 > My Lists </h2>
      </div>
      <button id="new-list-button" onclick="newList()">New List</button>
      <!-- User Title Lists -->
      <div id='profile-lists'>
        <h4 class="list-title"> Currently Watching </h4>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVpWLG11PojFPeqpJyc14l1iTPUtb-7K9nONUphboJDuTEUdXQNfPgHzcttWQhMCSvsS6SSo5qmheyWPwmLPGmqpfCGXV8MvxrJMeLUbMgxLFAOgxWcw8on2bnW3.jpg?r=748" ></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABT4b-L4lOWAUoOrJmd9FvafStZx30Du2K8JS5D9UDoR86h6rbcYGLwKXPax41P5WYyW28Rs4hH6-iTnpRr4sHSIudUk.webp?r=7cf"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZBFSa5ZzaSLKxdpxm9cfl_1B1xy3tNFjbjcChJFWzNRJUJYbtEKYjVD4vEDzM798SJEflDk_ui0wA5KSnFtK7fTo_A.webp?r=db3"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABesAM_VziyoP7w00s73XNNOUEvGHIOQ-v_WzXBYXRQjHUSwGLWVxNngldaUq94TOTnrRKnyntj42VXhA-RrYCkqOKAJoFkPz3479seUKUQXaNraxQMoeu7nvqpgS.jpg?r=2f9"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABchn_R-T4AbrP8GTDKKgsUjM0Qc8eeZVyJD3vr2PYlfp-ezPxkYw74GIxvZQE3WWuZjjkniA8_OxsSAe-UjV_VAGU9M.webp?r=c59"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbfe8xIEa_hk0scnpRGwojPmP1ihGEsXJhnK43myciQkOgnZtf2CK2TZc12W3h4_2MzSBQU_tegt30jOdAFMw4iHtKE.webp?r=447"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeKsCNeMcaFlDSqW-9iM-iXAWZ4EJbaiU-xB26TSU8jLQ4wtqD8wdb7bfVIdZd49dMYZLeWAe4FOxEOgaGXxRxvbr7o.webp?r=346"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS5KksxMnJrkw_dcJypT_UhPFzelf3xlXykdh8sV_IzEeE7SOJjB4TXhb_-nhmW4vql4p2jDa--NZk__UGCtl4aol1Aa-7jp2XC8SaRqS7mkmZPNsrm0O7G0av8b.jpg?r=4d2"></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWXJEO14_xbnRBk2LCb3shprrYElYjRojaM7D7kt0yIxWTjkBE9ix5_YgeMcdQ8TxWI6vnAznNGlnKheF3a2gMo63U4zV4dzKyop5rOOk54edl5dyG2UdVZsmvKj.jpg?r=020" ></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZCvja_lI3xz1Yku6ILjKeGPIFB0GDD60z3Wf2YQPXlQEOF1O0uYsJqBPZhHZGQiH8VmuYGLbPVd2yhLLcSZTI05ijc.webp?r=b16" ></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcdvMmYPKzHBs4JQ1Whr0kXhDp3KRcJ0ctdZcWtA0w8nfksCn1F82aQfkOJoIUlIx3FYaFQiCgd_0tA6prZ2dtQc0naiZx_p_BwIH38btLmsL3X3tjKfBJUTEXka.jpg?r=cb4" ></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcy5tViLnHlKOxRs6_X_86-c-EWQFXb3kRgntieSx5LcN98QJAxUSe8Od1IhcjvyWSNr8WyzzSyvtGBk7h0CVTtUw3JDQvPlmGw07Ph_VsA667Ojmu40xxd8Y6sO.jpg?r=a85" ></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYM1vDCBDzjc5-E39LkA7UfRrLqcE46-M8Y0Uwux44kAMTGqM5N-XbFeYZIX_rlA-WMZ3_gZ4KrGU7CtDz18y9pK0hZtTCmrILOBjbfLp__-7oad1Ee2cR6gNOYM.jpg?r=c29" ></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVEl8s77m8qslFacW9j3uvEgxfVq_wYMfuU-9pHvaSZJBM6Ynn8CX2x6hNy50Nr7kE181TAnafl2GpMsRY4ENA1zBRSQJqg6P25FIgpv_2R7tnwvyq7fVREbLWwP.jpg?r=2f2" ></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABa1F_VhhmX6TfevSFupLqnIxyjnY45VNwhFbyS9IJAQnwwdvXfUaxJQNLAlFC9_0rye3hUxkrjo4UgTn4G74EYwPMOhkJxoZxaRj6HKa0tHBjOWct-V8afnktld4.jpg?r=696" ></img>
            </div>
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfuIXSPh5wc-f7oUq7CUDS8m2Ou8svZWdt5lMY4THWfTeLv7qR-FkgeNcoLFdCAL9fYLc2ksZd-_eb8WoCbIDfPMwY4.webp?r=575" ></img>
            </div>
        </div>
        <h4 class="list-title"> Watched This Year </h4>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABX1svJIb1AOBr3oSIMolMtiQl4j6IDNINnSHG5_nERnnJUiXcl-oQ2k0QvlZNNgTKBmVMEeHLCpZxT01msh92I0p36U.webp?r=23e" ></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXil1GVMBmZfWRDgv8Oq1dOqlgvKLItmtpchvwEPGoU2ThaQrR_ytmfb1lyRysgFUISTo6UOqUNQeF2NYL5_-5KtHI7l5EeOF4uoyWdYou8NJjMm3vMEFhnaRyGT.jpg?r=a6f"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTgUaowOP66apyvKP7mzvYjia1p2rOxS5fjwEj8Wq6HYBVywmoEg23_opAdC_7TKOsqQZQgtH2bGzQjia73kPo3mXsU.webp?r=24a"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWuNQ3X8r1ybDV1bKCxofFUqnOiQKn31bJFm4ZfR6YCPpBMCuhTzw-574EGhWaxPJ2zq_6q2si0rifb43Kkox0qs0FI.webp?r=9bb"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTCijy0UgYSwb8zL6r7F1gkujdSWFsm-AhlcpLd0A1Wne7Q4LPdFjHmlcwdW71LtTVojhJg9FcsXibQzCfSirO5Pa8E.webp?r=bcf"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZwpWaexLcLfpXvvoMLUVTsmb8SH3aX9YkFocwL42WklGgu-14IkUj8S9qdZDHz_I_0BN2VAYzYnR_t6hs-wJoHlHozz38ZztWOxVOCSQVXwxQqSrzJTlEucYgxf.jpg?r=75b"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSUvPO7op4uEk92PzuK5SUpNq7aLqsdr1d1DZI-IHRSKv4wODV30ujfU1CjvraFLjY8GBTwMNjZc5xPS_8PFeYO8BSc.webp?r=192"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfTCDEvEgHldqpW5xf17G3XkjcSbiKjc8zHRuVvutO4H1PAuo6cnEgYStgxjgdE_yznzC2PQgOqZNSr-bukrZ9NepWE.webp?r=3ca"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZBiiu3ZAjkVvEZlwgbgP-4ARgD7gWJ2io1bQZV5jUKYPlAmO5NHyXDOi8kk6sipREdbBSD94g_vhg3LqJ5tJKeq-c4.webp?r=d4a"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSoQIM1qv-jZTxPQ41dVeP0vUSluOm70Q4vpX-kCvOxA2PrM5ZBybiK8a_w13LGT_F9112OD9ZQ7pSBHP8oO8IT6Njc.webp?r=7b7"></img>
            </div>
            <div class="item">
              <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUqFTSb5Og6Jk2QuOJEPXQzbJyiPxuqR6Ep_kjPtKY3ZBt7qOdLWSWZidhoQjLfLllW3t-p-0X93StIsFqZtQpYRKpCcGC82WNqJrq3c7_1fYeSL49OLdpDxFPti.jpg?r=cff"></img>
            </div>
        </div>
        <h4 class="list-title"> Want To Watch </h4>
        <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQD8m-2mxOHI8Ut091vswaxKjsEtVBbHlZaZMDWqj1LIBF3LsWK0aIyFINwtbLzmM4RQf14mizuQNJeEBilq2bvskfc.webp?r=c9f" ></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV-VLsnXyIZykNmvzVJyuwgH8OGyzSTf-7JjApP0ebIQgMSPdjPbvf5xI6FkOmKee7BGwkT5uWvU9p2TrM4xAXTuvWk.webp?r=f24"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABefEpmjanjTftb881W_YZ_rWV380_uVc5sw2LbAvyjfwIfkyJ0mwZj1Pm_XlUnr6iJaG0sAscF4LOY7tGUr6D6ZcmOE.webp?r=e70"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVLuOhe_nQy5456v750ImC2pv5cft_LYLbX1YZ7UAQZfwb1NI4fRnPyZyj3HEbl5TDTlAJwt4e49u3IghYtIDeCHEOo.webp?r=c15"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXJHZhM9u4-hwchCc3xsTFVTibvn8KcplRzRH2zMKAvsWaIjYot-pU08D0j6d7D2xZZ3H0UsxdYYL2b2hLfLfRzQX8Y.webp?r=73b"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdNSbsHUBfBHVwtUvE66H-rAWxKv5LxMgQWFb7KJuAJpUoo3BhMvo7wo74jEab5eDzi6Q-SfPOPiMFRJ7I3hJHA0qKs.webp?r=ad7"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQ_wXwHIl4cxICrxnaywSw-5GkRVulEw--7G_-Bly_-n7Y68v1X37qzzfsqiHfLVF9IP1Mo0m3mVfBDx05HDDfUbh-8.webp?r=790"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcNq_f3xil9rB7t0sU7ddKmOWSIwych4nLQPT1u0j9Dgoq_A498yOFiomQ3iy1Y20RmtYtfmfIQO8UFmtihtRqZgTb4.webp?r=7f8"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXu1Jcd-WGayo_8C62HrgXni1Lx3NeNP-x_25rZayoEYUfTjwa9mf0nJf6yeK7QWceG_PaZhF6e3h2slCrbDqyCzME0.webp?r=2e1"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeaodi9BZRTh3G9T7tFv0lm2G1sjmQk7DrTTpVX1hrpWZ3I2ySKItZgB4ryigD7rSeKr3X1JV2d7OpiUYBnImXFPfgU.webp?r=1ab"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbIUwotP035y7X3je_qM4KNLYKy1wDXFY_AgZXmYTmsuNbZSx5AhrsAFkOvb2a03brMEHK2RIXHQAGZk0rPAyxrXFrU.webp?r=a42"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQM6EUj6d63xEPuknIxwJHUzpSTElpsxETxIjehMgwpt6lSIcCzYStqTlQPLXN_zwLfq84Le8WqWLOtVpodfShne2MI.webp?r=5ec"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV-VLsnXyIZykNmvzVJyuwgH8OGyzSTf-7JjApP0ebIQgMSPdjPbvf5xI6FkOmKee7BGwkT5uWvU9p2TrM4xAXTuvWk.webp?r=f24"></img>
                </div>
                <div class="item">
                  <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZbb6-6vKOnmmBhexVDoKA_hSSUgm6rVVjH7qfYvrgDiydTAl00ppsMIHsszQhtjbeujt_T4ZGrOXXwQwJwirwE5VY4.webp?r=698"></img>
                </div>
                <div class="item">
                    <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABd5Q66-LLwMrV8ekr5kx6Op5Y-1SeHQSEx8lhX9MCvS3rgV-1G_mUhPBqrixDts-L_AOdPj_dwIM0enLVdp9dx2EWxk.webp?r=75a" ></img>
                </div>
            </div>
      </div>
      <!-- Friends List -->
      <div id="profile-friends">
          <div class="friend-row"><h4>Friend 1 </h4></div>
          <div class="friend-row"><h4>Friend 2 </h4></div>
          <div class="friend-row"><h4>Friend 3 </h4></div>
          <div class="friend-row"><h4>Friend 4 </h4></div>
      </div>
    </div>
  </body>
  <!-- JQuery and Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- Owl Carousel (jQuery plugin used for displaying lists/titles)-->
  <!-- Owl Carousel v2.3.4
      Copyright 2013-2018 David Deutsch
      Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE -->
  <script src="owl.carousel.js"></script>
  <!-- Initialize carousel -->
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:5,
      nav:true,
      autoHeight:true,
      responsive:{
          0:{
              items:2
          },
          500:{
              items:3
          },
          700:{
              items:4
          },
          900:{
              items:5
          },
          1100:{
              items:6
          },
          1300:{
              items:7
          }
      }
    })
  </script>
  <script>
    /* Toggle Buttons */
    function ViewLists(){
      var lists = document.getElementById("profile-lists");
      var friends = document.getElementById("profile-friends");
      lists.style.display = "block";
      friends.style.display = "none";
      document.getElementById("profile-title").innerHTML = "<h2> My Lists </h2>";
      listBtn=document.getElementById("new-list-button");
      listBtn.style.display='block';
    }
    function ViewFriends(){
      var lists = document.getElementById("profile-lists");
      var friends = document.getElementById("profile-friends");
      var title =document.getElementById("profile-title");
      title.innerHTML =  "<h2> My Friends </h2> ";
      lists.style.display = "none";
      friends.style.display = "block";
      listBtn=document.getElementById("new-list-button");
      listBtn.style.display='none';
    }
     /* Keep track of number of lists */
    var numLists=3; //list counter
    function newList(){
      //get the lists' container
      var node = document.getElementById('profile-lists');
      node.insertAdjacentHTML('beforeend',document.getElementById('carousel').innerHTML);
      numLists++;
      /* initialize empty carousel */
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:5,
        nav:true,
        autoHeight:true,
        responsive:{
          0:{
              items:2
          },
          500:{
              items:3
          },
          700:{
              items:4
          },
          900:{
              items:5
          },
          1100:{
              items:6
          },
          1300:{
              items:7
          }
        }
      })
      /* Arrow Function */
      var string = numLists => "You have "+ numLists + " lists."; //arrow function
      document.getElementById('listcount').innerHTML= "<h2>"+ string(numLists)+ "</h2>";
    }
  </script>
    <!-- Fill the New List -->
  <script type='text/template' id='carousel'>
    <h4 class='list-title'> New List </h4>
    <div class="owl-carousel owl-theme">
      <div class='item' style='height:80px !important; width:135px'>
        <img style='height: 100%; background-color:grey'/>
      </div>
    </div>
  </script>
</html>
