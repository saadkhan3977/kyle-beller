
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="/" target="_blank">Property</a> {{date('Y')}}</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--  <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>-->
  <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.4/tagify.min.js"></script> -->
  <script src="{{asset('backend/dist/bootstrap-tagsinput.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  
  @stack('scripts')
  
  <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
  <script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
    $('.select2').select2();
    setTimeout(function(){
      $('.alert').slideUp();
    },4000);



    
  </script>


<script>
    $(document).ready(function() {
      // alert('asd');
     $('#lfmm').filemanager('image');
     $('#lfmmm').filemanager('image');
     $('#lfmmmm').filemanager('image');

});






</script>
<!-- // features -->
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('hashtags');
            const wrapper = document.getElementById('tags-input-wrapper');
            const hiddenInput = document.getElementById('hiddenHashtags');

            input.addEventListener('keyup', function(event) {
                if (event.key === 'Enter' && input.value.trim() !== '') {
                    event.preventDefault(); // Prevent form submission
                    const tagText = input.value.trim();
                    toggleTag(tagText);
                    input.value = '';
                }
            });

            wrapper.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-tag')) {
                    event.target.parentElement.remove();
                    updateHiddenInput();
                }
            });

            function toggleTag(text) {
                const existingTag = Array.from(wrapper.getElementsByClassName('tag')).find(tag => tag.textContent.trim() === `#${text}`);
                if (existingTag) {
                    existingTag.remove();
                } else {
                    const tag = document.createElement('span');
                    tag.className = 'tag';
                    tag.textContent = `#${text}`;

                    const removeBtn = document.createElement('span');
                    removeBtn.className = 'remove-tag';
                    removeBtn.innerHTML = '&times;';
                    tag.appendChild(removeBtn);

                    // Insert the tag before the input element
                    wrapper.insertBefore(tag, input);
                }
                updateHiddenInput();
            }

            function updateHiddenInput() {
                const tags = wrapper.querySelectorAll('.tag');
                const tagArray = Array.from(tags).map(tag => tag.textContent.slice(1).trim()); // Remove the '#' from each tag and trim
                hiddenInput.value = tagArray.join(',');
            }

            // Prevent form submission on Enter key press in the hashtags input
            document.getElementById('myForm').addEventListener('keydown', function(event) {
                if (event.key === 'Enter' && event.target === input) {
                    event.preventDefault();
                }
            });
        });
    </script>