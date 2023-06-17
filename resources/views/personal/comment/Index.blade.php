

  @extends('personal.layouts.main')
  @section('content')
    <!-- Main content -->
    <div class="main-container">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Мои комментарии</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Комментарии</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

    <section class="content ">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="row ">
            <div class="col-9">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Комментарий</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->message }}</td>
                                <td class="text-center"><a href="{{ route('post.show', $comment->post_id) }}">
                                        <i class="fa fa-eye"></i></a></td>
                                <td class="text-center"><a href="{{ route('personal.comment.edit', $comment->id) }}"
                                                           class="text-success" ><i class="fas fa-pencil-alt"></i></a></td>
                                <td class="text-center">
                                    <form action="{{route('personal.comment.delete', $comment->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i class="fa fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
