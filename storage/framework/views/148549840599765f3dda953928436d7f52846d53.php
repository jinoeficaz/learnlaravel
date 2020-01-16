<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    <?php echo e($project_name); ?>

                    <br/>
                </div>

                
                

                

                


                


                <?php 

                    $alert = true; //This part works

                ?>

                <?php if($alert == 'true'): ?>

                    
                    
                    <?php $__env->startComponent('components.alert',['check' => 1,'live' => 'no']); ?>
                        
                        

                        <?php $__env->slot('title'); ?>
                            Alien Alert!
                        <?php $__env->endSlot(); ?>



                        <strong>I am a test component and I came from another planet ! ho ha !</strong>
                    <?php echo $__env->renderComponent(); ?>


                    

                    <?php $__env->startComponent('components.alert', ['check' => 1,'live' => 'no']); ?>
                        <?php $__env->slot('title'); ?>
                            Alien Gained Life!
                        <?php $__env->endSlot(); ?>
                        <strong>An alien has been revived to life! Come on ! This is a new component ! Let him live !</strong>
                    <?php echo $__env->renderComponent(); ?>    

                <?php endif; ?>    

                <br/>

                <?php $__env->startSection('Home','My test menu'); ?>
                <div class="links">
                    <?php if($menu_needed !== 'no'): ?>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    <?php endif; ?>
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <?php if($i == 3) continue; ?>
                            <a href="<?php echo e(url('/page')); ?>/<?php echo e($i); ?>"><?php echo e($i); ?></a>
                        <?php if($i == 8) break; ?>
                    <?php endfor; ?>

                    </br>    
                    
                </div>
            </div>
        </div>
        <script>
            <?php

                $alien_array   =    array(
                                       'captain'    =>  'tensetopton',
                                       'driver'     =>  'rometonion',
                                       'soldier'    =>  'teridion'
                                    );

            ?>

            var app = <?php echo json_encode($alien_array, 15, 512) ?>;
            console.log(app);
            var app = <?php echo json_encode($alien_array, JSON_PRETTY_PRINT, 512) ?>;
            console.log(app);
        </script>
    </body>
</html>

<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\learnlaravel\resources\views/welcome.blade.php ENDPATH**/ ?>