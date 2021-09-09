function addDepositAmount() {
    rangeDepositAmount = document.getElementById("rangeDepositAmount").value;
    depositAmount = document.getElementById("depositAmount");
    depositAmount.value = rangeDepositAmount.replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
};

function addDepositReplenishmentAmount() {
    rangeDepositReplenishmentAmount = document.getElementById("rangeDepositReplenishmentAmount").value;
    depositReplenishmentAmount = document.getElementById("depositReplenishmentAmount");
    depositReplenishmentAmount.value = rangeDepositReplenishmentAmount.replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
};