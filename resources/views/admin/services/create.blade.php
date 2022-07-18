@extends('admin.layouts.app')

@section('content')
            
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Services / Create </h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <section class="content  h-100"">
                    <div class="container-fluid  h-100"">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
							<div class="col-md-12">								
                               <div class="card">
                                 <div class="card-header">
                                 </div>
                                 <div class="card-body">
                                     <div class="form-group">
                                        <label for="name"> Name </label>
                                        <input type="text" id="name" name="name" class="form-control">                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="description"> Description </label>
                                        <textarea id="description" name="description" class="summernote"></textarea>                               
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="image"> Image </label>
                                            <div id="image" class="dropzone dz-clickable">
                                                <div class="dz-message needsclick">
                                                    <br> drop files here or click to upload
                                                    </br></br>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="shrot Description"> Short Description </label>
                                        <textarea id="short_description" name=" short_description" cols="30" rows="10 "class="form-control"></textarea>  
                                        </div>
                                    </div>
                                 </div>                            
                               </div>
							</div>                            
                        </div>
                        <!-- /.row -->
                        <!-- /.row (main row) -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
         
@endsection


@section('extraJS')


<script type="text/javascript">

alert();

</script>


@endsection

            