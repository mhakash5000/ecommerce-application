<!DOCTYPE html>
<html>
   <head>
      @include('frontend/pertials.meta')
      <!-- bootstrap core css -->
      @include('frontend/pertials.style')
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('frontend/pertials.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('frontend/pertials.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('frontend/pertials.why-shop')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('frontend/pertials.new-arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('frontend/pertials.product')
      <!-- end product section -->

      <!-- subscribe section -->
       @include('frontend/pertials.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('frontend/pertials.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('frontend/pertials.footer')
      <!-- footer end -->
      
      <!-- jQery -->
     @include('frontend.pertials.script')
   </body>
</html>