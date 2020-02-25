      <footer id="footer" class="text-center">
        FOOTER CONTENT
      </footer>
    
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="assets/js/main.js" type="text/javascript"></script>

    <?php
      if (isset($scripts) && is_array($scripts) && count($scripts)) {
        foreach ($scripts as $src) {
          echo '<script src="'.$src.'" type="text/javascript"></script>'.PHP_EOL;
        }
      }
    ?>
  </body>
</html> 