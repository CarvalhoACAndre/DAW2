
  
<?php $__env->startSection('content'); ?>
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0 ?>
        <?php if(session('cart')): ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <tr rowId="<?php echo e($id); ?>">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin"><?php echo e($details['name']); ?></h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">$<?php echo e($details['price']); ?></td>
                   
                    <td data-th="Subtotal" class="text-center"></td>
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="<?php echo e(url('/dashboard')); ?>" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-danger">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
<?php $__env->stopSection(); ?>
  
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
  
    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '<?php echo e(route('update.shopping.cart')); ?>',
            method: "patch",
            data: {
                _token: '<?php echo e(csrf_token()); ?>', 
                id: ele.parents("tr").attr("rowId"), 
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".delete-product").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '<?php echo e(route('delete.cart.product')); ?>',
                method: "DELETE",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('product/shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alisha/myApps/trabalho/resources/views/product/cart.blade.php ENDPATH**/ ?>