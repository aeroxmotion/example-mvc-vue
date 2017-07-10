<template>
    <h1>Home</h1>

    <form>
        <h2>Contáctanos</h2>

        <p>
            <label for="full_name">Full name</label>
            <input type="text" id="full_name" v-model="contact.full_name">
        </p>

        <p>
            <label for="email">Email</label>
            <input type="text" id="email" v-model="contact.email">
        </p>

        <p>
            <label for="body">Body</label>
            <textarea id="body" v-model="contact.body"></textarea>
        </p>
    </form>
</template>

<script>
    export default {
        data () {
            return {
                contact: {}
            }
        },

        methods: {
            send () {
                axios.post('../actions/send-email.php', this.contact)
                    .then(response => {
                        console.log('Email sent successfully')
                    })
                    .catch(console.error)
            }
        }
    }
</script>