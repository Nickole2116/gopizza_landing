<div class="section banner">
  <!-- Swiper 1 -->
  <div class="swiper swiper1">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Swiper 1 - Slide 1</div>
      <div class="swiper-slide">Swiper 1 - Slide 2</div>
      <div class="swiper-slide">Swiper 1 - Slide 3</div>
    </div>
    <div class="swiper-pagination swiper-pagination1"></div>
  </div>

  <!-- Swiper 2 -->
  <div class="swiper swiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Swiper 2 - Slide A</div>
      <div class="swiper-slide">Swiper 2 - Slide B</div>
      <div class="swiper-slide">Swiper 2 - Slide C</div>
    </div>
    <div class="swiper-button-next swiper-button-next2"></div>
    <div class="swiper-button-prev swiper-button-prev2"></div>
  </div>


    

</div>
<div class="section order">Section 2</div>
<div class="section benefit">Section 3</div>
<div class="section introduce">Section 4</div>


<!-- Modal -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sections = document.querySelectorAll(".section");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show");
                    }
                });
            },
            {
                threshold: 0.2 // 20% 进入视口触发
            }
        );

        sections.forEach(section => observer.observe(section));
    });

 
    
    
  
</script>