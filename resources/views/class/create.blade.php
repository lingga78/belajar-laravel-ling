@extends('template.master')

@section('judul')
<h1>Manajemen Kelas</h1>
@endsection

@section('content')
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/class" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputId">Id</label>
                    <input type="text" name="Id" class="form-control" id="inputId" placeholder="Enter Id">
                  </div>
                  <div class="form-group">
                    <label for="inputNama_Kelas">Nama Kelas</label>
                    <input type="text" name="nama kelas" class="form-control" id="inputNamaKelas" placeholder="Enter Nama Kelas">
                    </div>
                    <div class="form-group">
                    <label for="inputJurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputJurusan" placeholder="Enter Jurusan">
                    </div>
                </select>
              </div>

                </div>
                <!-- /.card.body -->

                    
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
           </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
          </section>
@endsection