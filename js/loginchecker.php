<script src="https://cdn.jsdelivr.net/npm/jwt-decode/build/jwt-decode.min.js"></script>
<script>
    function LoginChecker(){
       var jwt = localStorage.getItem('jwt');
       const status = checkTokenStatus();

       return status;
    }

    function checkTokenStatus() {
            const token = localStorage.getItem('jwt');

            if (!token) {
                localStorage.removeItem('jwt');
                return {"status":'invalid'};
            }

            const parts = token.split('.');
            if (parts.length !== 3) {
                localStorage.removeItem('jwt');
                return {"status":'invalid'};
            }

            try {
                const decoded = jwt_decode(token);
                const currentTime = Math.floor(Date.now() / 1000); // Current time in seconds

                if (decoded.exp < currentTime) {
                    return {"status":'expired'};
                }

                
                return {"status":"valid","data":decoded};
            } catch (error) {
                 return {"status":'invalid'}; // Token is malformed
            }
        }

        
</script>