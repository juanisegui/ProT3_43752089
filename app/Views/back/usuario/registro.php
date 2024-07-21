<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-3" style="width: 50%;">
                <h4>Registrarse</h4>
                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?= base_url('/enviar-form') ?>">
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <div class="card-body justify-content-center" media="(max-width:768px)">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Nombre completo">
                            <?php if ($validation->getError('nombre')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('nombre'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                            <?php if ($validation->getError('apellido')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('apellido'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="correo@hotmail.com">
                            <?php if ($validation->getError('email')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                            <?php if ($validation->getError('usuario')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('usuario'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                            <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                            <?php if ($validation->getError('pass')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('pass'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <input type="submit" value="Guardar" class="btn btn-success">
                        <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
