
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
 <div class="container mt-4">
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                     <h5>Add Products</h5>
                     <a href="<?= base_url('products') ?>"  class="btn btn-danger btn-sm float-end">Back</a>
                 </div>
                 <div class="card-body">
                     <table class="table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                           </thead>
                  
                                
                                    

                                   

                 
   
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>




<?= $this->endSection() ?>

<? $this->section('scripts') ?>

