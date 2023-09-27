document.addEventListener("DOMContentLoaded", function () {
    var checkinInput = document.getElementById("checkin");
    var checkoutInput = document.getElementById("checkout");

    checkinInput.addEventListener("change", function () {
        var checkinDate = new Date(checkinInput.value);
        var maxCheckoutDate = new Date(checkinDate);
        maxCheckoutDate.setDate(checkinDate.getDate() + 7);

        // チェックアウト日の制約を設定
        checkoutInput.min = checkinInput.value;
        checkoutInput.max = maxCheckoutDate.toISOString().split('T')[0];
    });
});