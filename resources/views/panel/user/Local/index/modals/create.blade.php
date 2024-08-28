<div class="modal fade" id="create-user">
    <div class="modal-dialog">
        <div class="modal-content bg-success">
            <div class="modal-header">
                <h4 class="modal-title">Criação de Usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card card-danger">
                    <div class="card-body">
                        <form action="{{ route("panel.user.store") }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="first_name" placeholder="Primeiro Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="last_name" placeholder="Apelido">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Senha">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha">
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-success">Gravar</button>
                </div>
            </div>
        </div>
    </div>
</div>
