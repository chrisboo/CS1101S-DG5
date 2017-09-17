function dequeue(q) {
    if (is_empty_list(q)) {
        return q;
    } else {
        return tail(q);
    }
}