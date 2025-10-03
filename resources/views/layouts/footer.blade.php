<footer class="bg-dark text-white text-center py-3 mt-auto fancy-footer">
    <div class="container">
        <small>&copy; {{ date('Y') }} Sistem Manajemen Pengguna</small>
    </div>
</footer>

<style>
  /* Footer style */
  .fancy-footer {
    background: linear-gradient(90deg, #0d6efd, #6610f2);
    box-shadow: 0 -2px 8px rgba(0,0,0,0.4);
    font-family: 'Poppins', sans-serif;
    letter-spacing: 1px;
    position: relative;
  }

  .fancy-footer small {
    font-size: 0.9rem;
    font-weight: 500;
    color: #fff;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
    background: linear-gradient(45deg, #ff6ec4, #7873f5);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: glow 2s infinite alternate;
  }

  /* Animasi glow */
  @keyframes glow {
    from { text-shadow: 0 0 5px #ff6ec4, 0 0 10px #7873f5; }
    to { text-shadow: 0 0 15px #ff6ec4, 0 0 25px #7873f5; }
  }
</style>
