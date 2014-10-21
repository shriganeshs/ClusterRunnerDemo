from unittest import TestCase

from src.python.lame_calculator import LameCalculator


class TestFib(TestCase):

    def test_fib_0(self):
        result = LameCalculator.fibonacci(0)
        self.assertEqual(0, result)

    def test_fib_1(self):
        result = LameCalculator.fibonacci(1)
        self.assertEqual(1, result)

    def test_fib_8(self):
        result = LameCalculator.fibonacci(8)
        self.assertEqual(21, result)

    def test_fib_50(self):
        result = LameCalculator.fibonacci(50)
        self.assertEqual(12586269025, result)
