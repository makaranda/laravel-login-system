<footer class="footer text-center">
    All Rights Reserved by globemw. Designed and Developed by <a
        href="https://globemw.net">globemw.net</a>.
</footer>

</div>

</div>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure to logout now...!!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          <a href="{{ route('admin.logout') }}" class="btn btn-danger text-white">Logout</a>
        </div>
      </div>
    </div>
</div>
