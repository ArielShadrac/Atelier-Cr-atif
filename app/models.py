from django.db import models

# Create your models here.
class Gallery(models.Model):
    # title = models.CharField(max_length=200, verbose_name='Titre')
    image = models.ImageField(upload_to='gallery/', verbose_name='Image')
    # description = models.TextField(verbose_name='Description')


    # def __str__(self):
    #     return self.title

    class Meta:
        verbose_name_plural = 'Galleries'