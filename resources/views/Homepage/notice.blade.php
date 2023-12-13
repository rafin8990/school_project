<style>
    .scroll-container {
        overflow: hidden;

    }

    .scroll-text {
        /* animation properties */
        white-space: nowrap;
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transform: translateX(100%);

        -moz-animation: my-animation 60s linear infinite;
        -webkit-animation: my-animation 15s linear infinite;
        animation: my-animation 60s linear infinite;
    }

    /* for Firefox */
    @-moz-keyframes my-animation {
        from {
            -moz-transform: translateX(100%);
        }

        to {
            -moz-transform: translateX(-100%);
        }
    }

    /* for Chrome */
    @-webkit-keyframes my-animation {
        from {
            -webkit-transform: translateX(100%);
        }

        to {
            -webkit-transform: translateX(-100%);
        }
    }

    @keyframes my-animation {
        from {
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        to {
            -moz-transform: translateX(-100%);
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }
    }
</style>


<div class="flex items-center lg:w-[1200px] mx-auto">
    <div>
        <h1 class="scroll-container bg-accent mt-2 p-2 text-white w-[100px] mx-5 text-center">Notice:</h1>
    </div>
    <div class="scroll-container  mx-auto">
        <div class="scroll-text text-2xl">
            <a href="http://school.nedubd.com/fontend/assets/files/notice.pdf">In commemoration of Victory Day, our office will be closed on December 16th. Victory Day is a significant occasion that holds great historical importance for our nation.</a>
        </div>
    </div>
</div>