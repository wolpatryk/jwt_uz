# Generated by Django 4.0.3 on 2022-04-03 18:12

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('DjangoAPIapp', '0001_initial'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='category',
            options={'verbose_name_plural': 'Categories'},
        ),
        migrations.AddField(
            model_name='book',
            name='author',
            field=models.CharField(default='test', max_length=100),
            preserve_default=False,
        ),
    ]
