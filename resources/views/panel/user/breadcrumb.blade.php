<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ $titleBreadCrumb ?? "Sem Título de BreadCrumb" }} | <a class="btn btn-sucess"><i class="fa fa-plus"></i></a></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route("panel.main.index") }}">Home</a></li>
            <li class="breadcrumb-item active">{{ $titleBreadCrumb ?? "Sem Título de BreadCrumb" }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
