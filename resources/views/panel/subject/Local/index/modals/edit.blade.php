<div class="modal fade" id="edit-user">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header">
                <h4 class="modal-title">Editar Usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('panel.user.update') }}" method="POST" enctype="multipart/form-data" name="formEditUser">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="routeType" value="web">
                <input type="hidden" name="id">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card card-danger">
                            <div class="card-body">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="first_name" placeholder="Primeiro Nome" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="last_name" placeholder="Apelido" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Senha" autocomplete="off">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-outline-success">Editar</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
