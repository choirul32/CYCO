<template>
    <div class="input-group">
        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

        <span class="input-group-btn">
            <button class="btn btn-primary" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['chatroom', 'role_id', 'user_id', 'room'],

        data() {
            return {
                newMessage: '',
                validation: []
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user_id: this.user_id,
                    message: this.newMessage,
                    role_id: this.role_id,
                    room: this.room
                });

                this.newMessage = ''
            }
        }
    }
</script>
