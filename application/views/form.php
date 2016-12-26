<h1 class="center-align">Ini Laporan Akhir 3 Esa 4IA10</h1>
      <div class="container">
        <div class="row">
          <form class="col s12" action="index.php/welcome/output" method="post">
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">assignment_ind</i>
                <input name="depan" type="text" class="validate">
                <label for="icon_prefix">Nama Depan</label>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">assignment_ind</i>
                <input name="belakang" type="tel" class="validate">
                <label for="icon_telephone">Nama Belakang</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">assignment</i>
                <input name="npm" type="text" class="validate">
                <label for="icon_prefix">NPM</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">assignment</i>
                <input name="kelas" type="text" class="validate">
                <label for="icon_prefix">KELAS</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">error</i>
                <input name="mantan" type="text" class="validate">
                <label for="icon_prefix">MANTAN TERINDAH</label>
              </div>
            </div>
            <div class="row">
              <button class="btn waves-effect waves-light col s12" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?php echo base_url(); ?>assets/images/parallax2.jpg"></div>
      </div>
