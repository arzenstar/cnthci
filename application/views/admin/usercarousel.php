<div class="modal fade" id="siswa">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">&times;</a>
                    <h1 class="page-title">ADD SISWA</h1>
                    
                </div>
                    <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/home/register/siswa" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Depan</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="firstnm" placeholder="Masukkan Nama Depan" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Belakang</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="lastnm" placeholder="Masukkan Nama Belakang" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Kelas</label>
                      <div class="col-sm-9">
                        <select class="form-control" type="text" name="kls" placeholder="Masukkan Kelas" required />
                        <option selected>--MASUKKAN KELAS--</option>
                        <?php
                        $kls=mysql_query("SELECT * FROM kelas");
                        while ($kelas=mysql_fetch_assoc($kls)) 
                        {
                         echo "<option>".$kelas['kelas']."</option>";
                        }
                        ?>
                      </select>  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Username</label>
                      <div class="col-sm-6">
                        
                        <input class="form-control" type="text" id="usersiswa" name="username" placeholder="Masukkan username" onkeyup="usernamesiswa(this.value)" required />
                        
                      </div>
                      <div class="col-sm-2">
                        <span id="sis1" class="btn btn-danger" style="visibility:hidden;"><i class="glyphicon glyphicon-stop" ></i></span>
                        <span id="sis2" class="btn btn-success" style="visibility:hidden;"><i class="glyphicon glyphicon-ok" ></i></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Alamat E-Mail</label>
                      <div class="col-sm-6">
                        <input class="form-control" type="text" name="email" placeholder="Masukkan Alamat E-Mail"  type="email" onkeyup="emailsiswa(this.value)" autofocus />
                        
                      </div>
                      <div id="mailsis" class="col-sm-3">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input class="form-control" type="password" name="pass" id="pass1" placeholder="Masukkan Password" onkeyup="passc(this.value)" required />
                        
                      </div>
                      <div id="passcount" class="col-sm-3"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Re-type Password</label>
                      <div class="col-sm-6">
                        <input class="form-control" type="password" name="pass2" placeholder="Masukkan Password"  onkeyup="passck(this.value)" required />
                        
                      </div>
                      <div id="passceck"class="col-sm-3"></div>
                    </div>
            
                      
                </div>
                <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" id="insert1" name="insertsiswa">Register</button>
                </div>
                    </form>
            </div>
        </div>
    </div>

<div class="modal fade" id="guru">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">&times;</a>
                    <h1 class="page-title">ADD GURU</h1>
                    
                </div>
                <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/home/register/guru" method="POST">
                <div class="modal-body">

            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Depan</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="firstnm" placeholder="Masukkan Nama Depan"   required />
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Belakang</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="lastnm" placeholder="Masukkan Nama Belakang" required />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Lahir</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="ttl" placeholder="Masukkan Tanggal Lahir (1999-12-01)">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Mata Pelajaran</label>
              <div class="col-sm-9">
                <select class="form-control" type="text" name="mapel" placeholder="Mata Pelajaran yang diajar" required />
                <option selected>MASUKKAN MAPEL-</option>
                <?php 
                $sql=mysql_query("SELECT * FROM mapel");
                while ($kls=mysql_fetch_assoc($sql)) 
                {
                 echo"<option>".$kls['mata_pelajaran']."</option>";
                }
                ?>
                 </select>             
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Username</label>
              <div class="col-sm-6">
                
              <input class="form-control" type="text" id="userguru" name="usernm" placeholder="Username" onkeyup="usernameguru(this.value)"  required/>
              </div>
              <div class="col-sm-2">
                
              <span id="gur1" class="btn btn-danger" style="visibility:hidden;"><i class="glyphicon glyphicon-stop" ></i></span>
              <span id="gur2" class="btn btn-success" style="visibility:hidden;"><i class="glyphicon glyphicon-ok" ></i></span>
              </div>
              <div class="col-sm-12">
              <label>tidak diawali dengan angka "1234567890", tidak menggunakan selain huruf "!@##$%^**()"</label> 
              </div>
              </div>
            
            <div class="form-group">
              <label class="col-sm-3 control-label">Alamat E-Mail</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="email" placeholder="Masukkan Alamat E-Mail" type="email" onkeyup="emailguru(this.value)" required />
                 
              </div>
              <div id="mail" class="col-sm-3"></div> 
              
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Password</label>
              <div class="col-sm-6">
                <input class="form-control" type="password" name="pass" id="passguru" placeholder="Masukkan Password" onkeyup="passcgr(this.value)" required />
              </div>
                <div id="passcountgr" class="col-sm-3"></div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Re-type Password</label>
              <div class="col-sm-6">
                <input class="form-control" type="password" name="pass2" placeholder="Masukkan Password"  onkeyup="passckgr(this.value)" required />
              </div>
                <div id="passceckgr" class="col-sm-3"></div>
            </div>
            </div>  
            <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="sub1()"  id="insert2" name="insertguru">Register</button>
            </div>
          </form>
          </div>
        </div>
    </div>