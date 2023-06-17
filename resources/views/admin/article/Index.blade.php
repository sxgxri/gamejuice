@extends('admin.layouts.main')
  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Статьи</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                <li class="breadcrumb-item active">Статьи</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-3 mb-3">
          <a href="{{ route('admin.article.create') }}" class="btn btn-block btn-success">Добавить</a>
          </div>
        </div>
          <div class="row">
            <div class="col-7">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th colspan="3">Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($articles as $article)
                      <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td class="text-center"><a href="{{ route('admin.article.show', $article->id) }}"><i class="fa fa-eye"></i></a></td>
                        <td class="text-center"><a href="{{ route('admin.article.edit', $article->id) }}" class="text-success" ><i class="fas fa-pencil-alt"></i></a></td>
                        <td class="text-center">
                            <form action="{{route('admin.article.delete', $article->id)}}" method="post">
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
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
