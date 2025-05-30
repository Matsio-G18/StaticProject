<!-- footer.php -->
<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <p class="mb-0">&copy; 2025 Annuaire des industries du Congo. Tous droits réservés.</p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Animation au scroll -->
<script>
  const fadeIns = document.querySelectorAll('.fade-in');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, { threshold: 0.1 });
  fadeIns.forEach(el => observer.observe(el));
</script>
</body>
</html>
