function f(n) {
    function f_helper(n, n0, n1, n2) {
        if (n < 3) {
            return n0;
        } else {
            return f_helper(n - 1, n0 + 2 * n1 + 3 * n2, n0, n1);
        }
    }

    return n < 3 ? n : f_helper(n, 2, 1, 0);
}