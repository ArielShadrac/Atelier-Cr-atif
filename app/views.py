from django.shortcuts import render
from .models import Gallery

# Create your views here.

def index(request):
    image = Gallery.objects.all()[:6]
    context = {'image': image}
    return render(request, "index.html", context)

def about(request):
    return render(request, "about.html")

def contact(request):
    return render(request, "contact.html")

def gallery(request):
    image = Gallery.objects.all()
    context = {'image': image}
    return render(request, "gallery.html", context)