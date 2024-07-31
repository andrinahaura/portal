@if ($errors->any())
<div class="alert alert-danger alert-dismissible text-white" role="alert">
  <ul class="mb-0">
    @foreach ($errors->all() as $error)
      <li>
        <span class="alert-text text-bolder text-white">{{ $error }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </li>
    @endforeach
  </ul>
</div>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible text-white">
  <span class="alert-text text-bolder text-white">{{ session('success') }}</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible text-white" role="alert">
  <ul class="mb-0">
    <li>
      <span class="alert-text text-bolder text-white">{{ session('error') }}</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </li>
  </ul>
</div>
@endif

<script>
  setTimeout(function() {
    document.querySelectorAll('.alert').forEach(function(alert) {
      alert.style.display = 'none';
    });
  }, 2000);
</script>