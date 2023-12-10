<div class="min-h-screen bg-gray-100">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
 <?php $__env->endSlot(); ?>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900">
<?php if(session()->has('success')): ?>
<d iv class="bg-green-100 border border-green-400 text-white-700 px-4 py-3 rounded
relative" role="alert"">
<?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="bg-red-100 border border-red-400 text-white-700 px-4 py-3 rounded relative"
role="alert"">
<?php echo e(session()->get('error')); ?>

</div>
<?php endif; ?>
				


				
						<a class="btn btn-outline-dark" href="<?php echo e(route('shopping.cart')); ?>">
							<i class="fa-solid fa-cart-shopping"></i> Cart <span class="badge text-bg-danger"><?php echo e(count((array) session('cart'))); ?></span>
						</a>
				<form action="<?php echo e(route('products.create' )); ?>" method="GET">
				<?php echo e(csrf_field()); ?>

				<button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700
				focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75" type="submit">Novo</button>
				</form>

<table id="list">
<thead>
<tr>
<th>Id</th>
<th>Title</th>
<th>Code</th>
<th>Description</th>
<th>Price</th>
<th>Image</th>
<td colspan="2">Action</td>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($product->id); ?></td>
<td><?php echo e($product->title); ?></td>
<td><?php echo e($product->code); ?></td>
<td><?php echo e($product->description); ?></td>
<td><?php echo e($product->price); ?></td>
<td><img src="<?php echo e(url('storage/'.$product->image)); ?>" alt="Bad"/></td>
<td><a href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a></td>
<td><a href="<?php echo e(route('addProduct.to.cart',$product->id)); ?>">Add to cart</a></td>
<td>
<form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="post">
<?php echo e(csrf_field()); ?>

<?php echo method_field('DELETE'); ?>
<button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md
hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75" type="submit">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<div class="sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
<?php echo e($products->links()); ?>

</div>
</div>
</div>
</div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<?php /**PATH /home/alisha/myApps/trabalho/resources/views/product/list.blade.php ENDPATH**/ ?>