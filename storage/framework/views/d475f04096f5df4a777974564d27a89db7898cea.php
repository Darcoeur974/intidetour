<section class="d-flex justify-content-center align-items-center m-5">
    <div class="col-lg-6">
        <h2>les circuits</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sint excepturi ullam qui praesentium? Aperiam accusamus ut voluptas eaque, voluptatibus sit doloremque ratione quo, provident ipsam odit, in iure! Sint?</p>
        <a href="/circuits">Voir tous les circuits -> </a>
    </div>
    <div class="col-lg-6">
        <section>
            <div class="container">
                <div id="carouselCircuits" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselCircuits" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCircuits" data-slide-to="1"></li>
                        <li data-target="#carouselCircuits" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <?php $__currentLoopData = $circuits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$circuit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php echo e($key==0?'active':''); ?>">
                            <img src="<?php echo e($circuit->image); ?>" height="300px" width="400px" class="" alt="" id="myImg">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>

                    <a class="carousel-control-prev" href="#carouselCircuits" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselCircuits" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione unde et impedit tempora saepe aut beatae incidunt consequatur iste, asperiores doloremque dignissimos optio eum error, ad quisquam, est necessitatibus facilis.</p>
            </div>
        </section>
    </div>
</section><?php /**PATH /home/krishna/Projet/intidetour/resources/views/clients/accueil/circuits.blade.php ENDPATH**/ ?>