<style>
    .marquee {
        position: relative;
        width: 100vw;
        max-width: 100%;
        height: 30px;
        overflow-x: hidden;
    }
    .track {
        position: absolute;
        white-space: nowrap;
        will-change: transform;
        animation: marquee 10s linear infinite;
    }
    @keyframes marquee {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }
</style>
<div class="marquee">
    <div class="track">
        <div class="address">

        </div>
    </div>
</div>
<script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                var curDate = new Date();
                var curDay = curDate.getDate();
                var curMonth = curDate.getMonth() + 1;
                var curYear = curDate.getFullYear();
                var curHours = curDate.getHours();
                var curSeconds = curDate.getSeconds();
                var curMinutes = curDate.getMinutes();
                const lat = position.coords.latitude;
                const long = position.coords.longitude;
                const api_key = 'AIzaSyD4unJZ0VfF09vOXUlRe5_IgtZEOy9uwe4';
                // Tạo URL yêu cầu Geocoding API
                const url = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${long}&key=${api_key}`;
                // Gửi yêu cầu GET đến API
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        // Xử lý kết quả trả về để lấy địa chỉ chính xác nhất
                        const address = data.results[0].formatted_address;
                        console.log(address);
                        document.querySelector(".address").innerHTML = address + " , " +curHours +  " giờ " +curMinutes +  " phút " +curSeconds + " giây " +curDay + "/" +curMonth + "/" +curYear;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            });
        }
</script>
