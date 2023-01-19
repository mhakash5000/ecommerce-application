<!DOCTYPE html>
<html>
   <head>
      @include('pertials.frontend.meta')
      <!-- bootstrap core css -->
      @include('pertials.frontend.style')
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('pertials.frontend.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('pertials.frontend.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('pertials.frontend.why-shop')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('pertials.frontend.new-arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('pertials.frontend.product')
      <!-- end product section -->

      <!-- subscribe section -->
       @include('pertials.frontend.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('pertials.frontend.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('pertials.frontend.footer')
      <!-- footer end -->
      
      <!-- jQery -->
     @include('pertials.frontend.script')
   </body>
</html>