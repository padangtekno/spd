 <footer id="footer" class="footer">
     <div class="copyright"> &copy; Copyright <strong><span>Pemerintahan Desa Situhiang</span></strong>
         - <script>
             document.write(new Date().getFullYear())
         </script>
     </div>
 </footer>
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/apexcharts.min.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/chart.min.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/echarts.min.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/quill.min.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/simple-datatables.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/tinymce.min.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/validate.js"></script>
 <script src="<?= base_url() ?>/NiceAdmin/assets/js/main.js"></script>

 <script>
     $(function() {
         $('#example1').DataTable()
         $('#example2').DataTable({
             'paging': true,
             'lengthChange': false,
             'searching': false,
             'ordering': true,
             'info': true,
             'autoWidth': false
         })
     })
 </script>

 <script>
     window.setTimeout(function() {
         $('.alert').fadeTo(300, 0).slideUp(300, function() {
             $(this).remove();
         });

     }, 2000);
 </script>
 </body>

 </html>