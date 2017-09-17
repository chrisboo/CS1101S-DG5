function enqueue(x, q) {
    if (is_empty_list(q)) {
        return list(x);
    } else {
        return pair(head(q), enqueue(x, tail(q)));
    }
}