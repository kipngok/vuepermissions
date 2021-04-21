<script>
  export default {
    mixins: [Laraform],
    name: 'login-form'
    data: () => ({
      created() {
        this.on('fail', (response) => {
          notifier.error(response.message)
        })

        this.on('success', () => {
          location.href = ‘/profile’
        })
      }
    })
  }
</script>