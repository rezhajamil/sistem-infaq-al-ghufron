@extends('layouts.app')
@section('content')
@include('layouts.header')
@include('layouts.banner')
@include('layouts.about')
@include('layouts.activity')
@include('layouts.infaq')
@include('layouts.report')
@include('layouts.contact')
@include('layouts.footer')
@include('components.calculator')
@section('scripts')
@if (session('success'))
<div class="flash-data d-none" data-flashdata="{{ session('success') }}"></div>
<script>
    var wa = document.querySelector(".flash-data").getAttribute("data-flashdata");
    Swal.fire({
        title: 'Pembayaran Infaq Berhasil'
        , text: "Terimakasih sudah berinfaq semoga menjadi keberkahan dan mendapat balasan-Nya"
        , icon: 'success'
    , })

</script>
@endif
<script>
    $(document).ready(function() {
        $('.btn-calc').click(function() {
            var jumlah = $('input[name="jumlah"]').val();
            var value = $(this).find('span').text();
            if (value == 'C') {
                $('input[name="jumlah"]').val(0);
                $('.jumlah').text(0);
            } else {
                if (jumlah == 0) {
                    $('input[name="jumlah"]').val(value);
                    $('.jumlah').text(value);
                } else {
                    if (jumlah.length < 12) {
                        $('input[name="jumlah"]').val(jumlah + value);
                        $('.jumlah').text((jumlah + value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
                    }
                }
            }
        });
    });

</script>

<script>
    var slider = tns({
        container: '.activity-slider'
        , items: 1
        , controls: true
        , controlsContainer: '.nav-container'
        , speed: 400
        , nav: false
        , responsive: {
            640: {
                items: 1
            }
            , 900: {
                items: 2
            }
        }
    });

</script>

{{-- <script>
        // How long you want the animation to take, in ms
        const animationDuration = 2000;
        // Calculate how long each ‘frame’ should last if we want to update the animation 60 times per second
        const frameDuration = 1000 / 60;
        // Use that to calculate how many frames we need to complete the animation
        const totalFrames = Math.round( animationDuration / frameDuration );
        // An ease-out function that slows the count as it progresses
        const easeOutQuad = t => t * ( 2 - t );

        // The animation function, which takes an Element
        const animateCountUp = el => {
        let frame = 0;
        let balance=el.getAttribute("balance");
        const countTo = parseInt( el.innerHTML, 10 );
        // Start the animation running 60 times per second
        const counter = setInterval( () => {
            frame++;
            // Calculate our progress as a value between 0 and 1
            // Pass that value to our easing function to get our
            // progress on a curve
            const progress = easeOutQuad( frame / totalFrames );
            // Use the progress value to calculate the current count
            const currentCount = Math.round( countTo * progress );

            // If the current count has changed, update the element
            if ( parseInt( el.innerHTML, 10 ) !== currentCount ) {
            el.innerHTML = currentCount;
            }

            // If we’ve reached our last frame, stop the animation
            if ( frame === totalFrames ) {
            clearInterval( counter );
            }
        }, frameDuration );
        };

        // Run the animation on all elements with a class of ‘countup’
        const runAnimations = () => {
        const countupEls = document.querySelectorAll( '#total' );
        countupEls.forEach( animateCountUp );
        };
    </script> --}}
@endsection
