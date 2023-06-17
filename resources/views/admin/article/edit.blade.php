@extends('admin.layouts.main')
  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование статьи</h1>
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

          <div class="col-12">
              <form action="{{ route('admin.article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                  <div class="form-group w-25">
                      <input type="text" class="form-control" name="title" placeholder="Название статьи" value="{{ $article->title }}">
                      @error('title')
                      <div class="text-danger">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <textarea id="summernote" name="content"> {{ $article->content }} </textarea>
                      @error('content')
                      <div class="text-danger">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group w-50">
                      <label for="exampleInputFile">Добавить превью</label>
                      <div class="w-25 mb-3">
                          <img src="{{ url('storage/' . $article->preview_image) }}" alt="preview_image" class="w-50">
                      </div>
                      <div class="input-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" name="preview_image">
                              <label class="custom-file-label" >Выберите изображение</label>
                          </div>
                          <div class="input-group-append">
                              <span class="input-group-text">Загрузить</span>
                          </div>
                      </div>
                      @error('preview_image')
                      <div class="text-danger">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group w-50">
                      <label for="exampleInputFile">Добавить изображение</label>
                      <div class="w-50 mb-3">
                          <img src="{{ url('storage/' . $article->main_image) }}" alt="main_image" class="w-50">
                      </div>
                      <div class="input-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" name="main_image">
                              <label class="custom-file-label" >Выберите изображение</label>
                          </div>
                          <div class="input-group-append">
                              <span class="input-group-text">Загрузить</span>
                          </div>
                      </div>
                      @error('main_image')
                      <div class="text-danger">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group w-50">
                      <label>Выберите категорию</label>
                      <select name="artcategory_id" class="form-control">
                          @foreach($artcategories as $artcategory)
                              <option value="{{ $artcategory->id }}"
                                  {{ $artcategory->id == $article->artcategory_id ? 'selected' : '' }} >{{ $artcategory->title }}</option>
                          @endforeach
                      </select>
                      @error('artcategory_id')
                      <div class="text-danger">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label>Теги</label>
                      <select class="select2" name="arttag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                          @foreach($arttags as $arttag)
                              <option {{ is_array($article->arttags->pluck('id')->toArray()) && in_array($arttag->id, $article->arttags->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $arttag->id }}">{{ $arttag->title }}</option>
                          @endforeach
                      </select>
                      @error('arttag_ids')
                      <div class="text-danger">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-success" value="Изменить">
                  </div>
              </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
