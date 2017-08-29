function fact(n) {
    function fact_helper(n, result) {
        if (n === 0) {
            return result;
        } else {
            return fact_helper(n - 1, result * n);
        }
    }

    return fact_helper(n, 1);
}