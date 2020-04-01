<template>
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Página de inicio</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista del Personal</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-block btn-success btn-sm" data-toggle="modal" data-target="#modal-info">
                                    <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.content -->
    </div>
</template>

<script>
    export default {
        name: "Personal"
    }
</script>

<style scoped>

</style>
