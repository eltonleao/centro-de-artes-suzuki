<style>
  .masthead {
    background-color: #f5ddaf;
    color: #000;
    padding: 60px 0;
    position: relative;
    /* padding-top: 260px; */
    padding-bottom: 50px;
  }

  .masthead h1 {
    text-align: left;
    --primary-color: #191919;
    --secondary-color: #ec5750;
    font-family: "Lato",Arial,Helvetica,sans-serif;
    overflow-wrap: inherit;
    font-weight: 700;
    font-size: 5.15rem;
    line-height: 1;
    outline: 0;
    padding: 0;
    margin-bottom: 2rem;
    background-repeat: no-repeat;
    box-sizing: border-box;
    display: block;
    color: inherit;
  }

  .masthead p {
    font-size: 1.2rem;
    margin-top: 20px;
  }

  .btn-apply {
    font-weight: 400;
    font-family: "Roboto",Arial,Helvetica,sans-serif;
    text-align: left;
    line-height: 1;
    font-size: .9em;
    background-repeat: no-repeat;
    box-sizing: border-box;
    outline: none;
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
    align-content: flex-start;
    text-decoration: none;
    transition: all 300ms ease;
    padding: 1.4em 2.6em;
    border-radius: 50px;
    box-shadow: 0 0 0 3em #ec5750 inset;
    color: #ffffff;
  }

  .image-container {
    right: 0;
    bottom: 0;
    max-width: 50%;
  }

  /* .image-container img {
    max-width: 100%;
    z-index: 2;
    position: relative
  } */

  .curve-bottom {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: auto;
    z-index: 1;
    left: 0;
  }

  .sup{
    text-align: left;
    overflow-wrap: inherit;
    line-height: 1;
    outline: 0;
    padding: 0;
    margin: 0;
    background-repeat: no-repeat;
    box-sizing: border-box;
    display: block;
    font-weight: 600;
    position: relative;
    z-index: 1;
    font-family: "Lato",Arial,Helvetica,sans-serif;
    font-size: 1.15rem;
    margin-bottom: 1.5em;
    color: #ec5750;
    text-transform: uppercase;
  }

  .floating-note{
    position: absolute!important;
    left: 0;
    z-index: 3;
  }
  .floating-note-1{
    transform: translate(-60px, -60px);
  }

  .floating-note-2{
    transform: translate(0px, 60px);
  }

  @media (max-width: 768px) {
    .image-container {
      position: static;
      text-align: center;
    }

    .masthead {
      text-align: center;
    }
  }
</style>

<section class="masthead text-md-left w-100 pt-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 z-2 text-left">
        <span class="sup text-uppercase">Centro de Artes</span>
        <h1 class="main-title text-uppercase">Suzuki de Petrópolis</h1>
        <button class="btn btn-apply text-uppercase">Quero ser Suzuki!</button>
      </div>
      <div class="col-md-6 image-container position-relative">
        <img class="z-3 position-relative" src="https://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/home_hero_01.png" alt="Music Courses">
        <img class=" floating-note floating-note-1" src="https://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/floating_notes_01.png" alt="">
        <img class=" floating-note floating-note-2" src="https://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/floating_notes_02.png" alt="">

      </div>
    </div>
  </div>
  <img class="curve-bottom" src="https://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/04/Wave_White_bottom_right_shape_01.png" alt="Curve Bottom">
</section>
