

class LameCalculator(object):
    @classmethod
    def add(cls, x, y):
        return x + y

    @classmethod
    def multiply(cls, x, y):
        return x * y

    @classmethod
    def fibonacci(cls, n):
        previous, current = 0, 1

        if n == 0:
            return previous

        for _ in range(1, n):
            previous, current = current, cls.add(current, previous)

        return current
