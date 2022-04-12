from rest_framework import serializers
from .models import Category, Book, Product
from django.contrib.auth.models import User


class RegistrationSerializer(serializers.ModelSerializer):

    email = serializers.CharField(min_length=6, max_length=150)
    username = serializers.CharField(min_length=6, max_length=150)
    password = serializers.CharField(max_length=150, write_only=True)

    class Meta:
        model = User
        fields = (
            'id',
            'first_name',
            'last_name',
            'email',
            'username',
            'password',
        )

    def validate(self, args):
        email = args.get('email', None)
        username = args.get('username', None)
        if User.objects.filter(email=email).exists():
            raise serializers.ValidationError(
                {'email': "emnail already exists"})
        if User.objects.filter(username=username).exists():
            raise serializers.ValidationError(
                {'username': "username already exists"})

        return super().validate(args)

    def create(self, validated_data):
        return User.objects.create_user(**validated_data)


class CategorySerializer(serializers.ModelSerializer):

    class Meta:
        fields = (
            'id',
            'title'
        )
        model = Category


class BookSerializer(serializers.ModelSerializer):

    class Meta:
        fields = (
            'id',
            'title',
            'category',
            'author',
            'isbn',
            'pages',
            'price',
            'stock',
            'description',
            'imageUrl',
            'status',
            'date_created'
        )
        model = Book


class ProductSerializer(serializers.ModelSerializer):

    class Meta:
        fields = (
            'id',
            'product_tag',
            'name',
            'category',
            'price',
            'stock',
            'imageUrl',
            'status',
            'date_created'
        )
        model = Product
