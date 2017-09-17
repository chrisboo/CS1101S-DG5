function pascal(row, col) {
    if (row == 1 || row == col) {
        return 1;
    } else {
        return pascal(row - 1, col - 1) + pascal(row - 1, col);
    }
}