
  @extends('personal.layouts.main')
  @section('content')
    <!-- Main content -->
    <div class="main-container">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Личный кабинет</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Личный кабинет</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $data['likesCount'] }}</h3>

                <p>Лайки</p>
              </div>
              <div class="icon">
                  <i class="nav-icon fas fa-th-list"></i>
              </div>
              <a href="{{ route('personal.liked.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $data['commentsCount'] }}</h3>

                <p>Комментарии</p>
              </div>
              <div class="icon">
                  <i class="nav-icon fa fa-tag"></i>
              </div>
              <a href="{{ route('personal.comment.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
    </div>

  @endsection
