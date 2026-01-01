<script>
document.addEventListener('contextmenu', e => e.preventDefault());
document.addEventListener('keydown', e => {
  if (e.ctrlKey && ['+','-','0','u'].includes(e.key)) e.preventDefault();
});
document.addEventListener('wheel', e => {
  if (e.ctrlKey) e.preventDefault();
},{passive:false});
</script>