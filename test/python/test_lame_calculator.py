from unittest import TestCase

from src.python.lame_calculator import LameCalculator


class TestCalculator(TestCase):

    def test_add(self):
        result = LameCalculator.add(1, 1)
        self.assertEqual(2, result)

    def test_multiply(self):
        result = LameCalculator.add(2, LameCalculator.multiply(2, 3))
        self.assertEqual(8, result)
